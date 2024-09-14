<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Customer;
use App\Models\Order;
use App\Models\WashService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $customers = Customer::orderBy("created_at", "desc")->get();
        $services = WashService::orderBy("created_at", "desc")->get();

        return view("order/create", ["customers" => $customers, "services" => $services]);
    }

    public function store(OrderRequest $request)
    {
        $validated = $request->only(["customer_id", "service_id"]);

        try {
            $transaction = DB::transaction(function () use ($validated) {
                $messageType = null;
                $messageData = null;

                $customer = Customer::find($validated["customer_id"]);
                if (!$customer) {
                    $messageType = "fail";
                    $messageData = "Customer not exists in database.";
                    return compact("messageType", "messageData");
                }

                $service = WashService::find($validated["service_id"]);
                if (!$service) {
                    $messageType = "fail";
                    $messageData = "Service not exists in database.";
                    return compact("messageType", "messageData");
                }

                // Check if customer has been ordered 5 times
                // Use modulo to find out whether the buyer's order amount is a multiple of 5
                $discountPrice = 0;
                if ($customer->milestones > 0 && $customer->milestones % 5 == 0) {
                    $discountPrice = $service->price;
                }

                $totalPrice = $service->price - $discountPrice;
                $order = Order::create([
                    "customer_id" => $customer->id,
                    "service_id" => $service->id,
                    "customer_name" => $customer->name,
                    "customer_phone" => $customer->phone,
                    "service_name" => $service->name,
                    "price" => $service->price,
                    "discount_price" => $discountPrice,
                    "total_price" => $totalPrice,
                ]);

                // Increase buyer's milestones by 1 after ordering
                $customer->increment("milestones", 1);

                $messageType = "message";
                $messageData = "Order created.";
                return compact("messageType", "messageData", "order");
            }, 3);

            if ($transaction["messageType"] == "message") {
                return redirect()->to(route("order.show", $transaction["order"]->id));
            }
            return back()->with($transaction["messageType"], $transaction["messageData"]);
        } catch (Exception $e) {
            return back()->with("fail", "Error when creating order data.");
        }
    }

    public function payment(Request $request, Order $order)
    {
        try {
            DB::transaction(function () use ($order) {
                $order->update([
                    "status" => "paid",
                ]);
                $order->save();

                return back()->with("message", "Order paid.");
            }, 3);

            return back();
        } catch (Exception $e) {
            return back()->with("fail", "Error when updating order data.");
        }
    }

    public function show(Request $request, Order $order)
    {
        return view("order/show", compact("order"));
    }
}
