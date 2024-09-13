<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("orders", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("customer_id")->nullable(true);
            $table->unsignedBigInteger("service_id")->nullable(true);
            $table->string("customer_name", 100)->nullable(false);
            $table->string("customer_phone", 15)->nullable(false);
            $table->string("service_name", 100)->nullable(false);
            $table->float("price", 2)->nullable(false);
            $table->float("discount_price", 2)->nullable(false)->default(0);
            $table->float("total_price", 2)->nullable(false);
            $table->string("status")->default("pending")->nullable(false);
            $table->timestamps();

            $table->foreign("customer_id")->references("id")->on("customers")->onDelete("set null");
            $table->foreign("service_id")->references("id")->on("wash_services")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("orders");
    }
};
