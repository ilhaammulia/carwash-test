<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WashServiceController;
use Illuminate\Support\Facades\Route;

Route::get("/", [DashboardController::class, "index"])->name("dashboard.home");
Route::prefix("customers")->group(function () {
    Route::get("/", [CustomerController::class, "index"])->name("customer.home");
    Route::get("/create", [CustomerController::class, "create"])->name("customer.create");
    Route::post("/", [CustomerController::class, "store"])->name("customer.store");
    Route::get("/{customer}/edit", [CustomerController::class, "edit"])->name("customer.edit");
    Route::post("/{customer}", [CustomerController::class, "update"])->name("customer.update");
    Route::get("/{customer}/delete", [CustomerController::class, "delete"])->name("customer.delete");
});

Route::prefix("services")->group(function () {
    Route::get("/", [WashServiceController::class, "index"])->name("service.home");
    Route::get("/create", [WashServiceController::class, "create"])->name("service.create");
    Route::post("/", [WashServiceController::class, "store"])->name("service.store");
    Route::get("/{service}/edit", [WashServiceController::class, "edit"])->name("service.edit");
    Route::post("/{service}", [WashServiceController::class, "update"])->name("service.update");
    Route::get("/{service}/delete", [WashServiceController::class, "delete"])->name("service.delete");
});

Route::prefix("orders")->group(function () {
    Route::get("/create", [OrderController::class, "create"])->name("order.create");
    Route::post("/", [OrderController::class, "store"])->name("order.store");
    Route::get("/{order}/show", [OrderController::class, "show"])->name("order.show");
    Route::get("/{order}/payments", [OrderController::class, "payment"])->name("order.payment");
});
