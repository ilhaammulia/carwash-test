<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\WashService;
use Illuminate\Http\Request;

class WashServiceController extends Controller
{
    public function index(Request $request)
    {
        $services = WashService::orderBy("created_at", "desc")->get();
        return view("service/service", ["services" => $services]);
    }

    public function create(Request $request)
    {
        return view("service/create");
    }

    public function store(ServiceRequest $request)
    {
        $validated = $request->only(["name", "price"]);
        try {
            $service = WashService::create($validated);
            $service->save();
            return back()->with("message", "Service created.");
        } catch (Exception $e) {
            return back()->with("fail", "Error when creating service data.");
        }
    }

    public function edit(Request $request, WashService $service)
    {
        return view("service/edit", compact("service"));
    }

    public function update(ServiceRequest $request, WashService $service)
    {
        $validated = $request->only(["name", "price"]);
        try {
            $service->update($validated);
            $service->save();
            return back()->with("message", "Service updated.");
        } catch (Exception $e) {
            return back()->with("fail", "Error when updating service data.");
        }
    }

    public function delete(Request $request, WashService $service)
    {
        try {
            $service->delete();
            return back()->with("message", "Service deleted.");
        } catch (Exception $e) {
            return back()->with("fail", "Error when deleting customer data.");
        }
    }
}
