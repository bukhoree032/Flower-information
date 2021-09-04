<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();

            $table->string('S_NAME')->nullable();
            $table->string('S_OWNER_PREFIX')->nullable();
            $table->string('S_OWNER_NAME')->nullable();
            $table->string('S_PHONE')->nullable();
            $table->string('S_NUMBER')->nullable();
            $table->string('S_VILLAGE')->nullable();
            $table->string('S_SUB_DISTRICT')->nullable();
            $table->string('S_DISTRICT')->nullable();
            $table->string('S_PROVINCE')->nullable();
            $table->string('S_LAT')->nullable();
            $table->string('S_LONG')->nullable();
            $table->string('S_FLOWER')->nullable();
            $table->string('S_FLOWER_OTHER')->nullable();
            $table->string('S_CUSTOMER_GROUP')->nullable();
            $table->string('S_CUSTOMER_GROUP_OTHER')->nullable();
            $table->string('S_SOURCE')->nullable();
            $table->string('S_LOCATION_AFFECT_SALE')->nullable();
            $table->string('S_COMPETE')->nullable();
            $table->string('S_SEND')->nullable();
            $table->string('S_SEND_OTHER')->nullable();
            $table->string('S_SELL')->nullable();
            $table->string('S_CONDITION_SELL')->nullable();
            $table->string('S_CONDITION_SELL_OTHER')->nullable();
            $table->string('S_CUSTOMER_PAYS')->nullable();
            $table->string('S_CUSTOMER_PAYS_OTHER')->nullable();
            $table->string('S_OTHER')->nullable();
            $table->string('S_PROMOTION')->nullable();
            $table->string('S_PROMOTION_OTHER')->nullable();
            $table->string('S_LABOR')->nullable();
            
            $table->string('S_VOLUME')->nullable();
            $table->string('S_REMAINING')->nullable();
            $table->string('S_REMAINING_CAUSE')->nullable();
            $table->string('S_REMAINING_CAUSE_OTHER')->nullable();
            $table->string('S_SET_PRICE')->nullable();
            $table->string('S_PROBLEM')->nullable();
            $table->string('file')->nullable();
            $table->string('file_multiple')->nullable();
            $table->string('_token')->nullable();

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
        Schema::dropIfExists('stores');
    }
}
