<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('service_id');
            $table->string('provider_id')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('mobile');
            $table->string('country');
            $table->string('state');
            $table->string('Distrcit');
            $table->string('address');
            $table->string('address1')->nullable();
             $table->string('pin')->nullable();
             $table->string('status');
               $table->string('payment_type');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
