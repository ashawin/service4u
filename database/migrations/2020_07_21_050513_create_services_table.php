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
              $table->string('slug');
              $table->string('provider_id')->nullable();
            $table->string('category_id');
            $table->string('subcategory_id');
            $table->string('product_id');
            $table->string('country_id');
            $table->string('state_id');
            $table->string('district_id');
            $table->string('area_id');   
            $table->string('currency');         
            $table->string('price');          
            $table->string('desc');
            $table->string('type');
            $table->string('is_price_show')->nullable;
            $table->string('status');
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
