<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('provider_id');
            $table->string('name');
            $table->string('email')->nulllable();
            $table->string('mobile');
            $table->text('service_name')->nulllable();
            $table->string('service_charge')->nulllable();
            $table->string('area')->nulllable();
            $table->text('address');
            $table->string('landmark')->nulllable();
            $table->string('pin')->nulllable();
            $table->string('description');
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
        Schema::dropIfExists('services');
    }
}
