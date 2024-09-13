<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Exception;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customer::orderBy("created_at", "desc")->get();
        $mostOrders = Customer::max("milestones") ?? 0;

        return view("customer/customer", ["customers" => $customers, "mostOrders" => $mostOrders]);
    }

    public function create(Request $request)
    {
        return view("customer/create");
    }

    public function store(CustomerRequest $request)
    {
        $validated = $request->only(["name", "phone"]);

        try {
            $isCustomerExists = Customer::where("phone", $validated["phone"])->count();
            if ($isCustomerExists) {
                return back()->with("fail", "Customer exists in database.");
            }
            $customer = Customer::create($validated);
            $customer->save();
            return back()->with("message", "Customer created.");
        } catch (Exception $e) {
            return back()->with("fail", "Error when creating customer data.");
        }
    }

    public function edit(Request $request, Customer $customer)
    {
        return view("customer/edit", compact("customer"));
    }

    public function update(CustomerRequest $request, Customer $customer)
    {
        $validated = $request->only(["name", "phone"]);
        try {
            $isPhoneExists = Customer::where("phone", $validated["phone"])
                ->whereNot("id", $customer->id)
                ->count();
            if ($isPhoneExists) {
                return back()->with("fail", "Phone number exists in database.");
            }
            $customer->update($validated);
            $customer->save();
            return back()->with("message", "Customer updated.");
        } catch (Exception $e) {
            return back()->with("fail", "Error when updating customer data.");
        }
    }

    public function delete(Request $request, Customer $customer)
    {
        try {
            $customer->delete();
            return back()->with("message", "Customer deleted.");
        } catch (Exception $e) {
            return back()->with("fail", "Error when deleting customer data.");
        }
    }
}
