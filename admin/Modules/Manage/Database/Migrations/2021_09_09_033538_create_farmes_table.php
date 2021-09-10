<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmes', function (Blueprint $table) {
            $table->id();

            $table->string('FA_GROUPNAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_HOUSENUMBER')->nullable();
            $table->string('FA_MOO')->nullable();
            $table->string('FA_SUB_DISTRICT')->nullable();
            $table->string('FA_DISTRICT')->nullable();
            $table->string('FA_PROVINCE')->nullable();
            $table->string('FA_PHONE')->nullable();
            $table->string('FA_LAT')->nullable();
            $table->string('FA_LONG')->nullable();
            $table->string('FA_FLOWER')->nullable();
            $table->string('FA_CUSTOMER_GROUP')->nullable();
            $table->string('FA_SEND')->nullable();
            $table->string('FA_SEND_OTHER')->nullable();
            $table->string('FA_SELL')->nullable();
            $table->string('FA_CONDITION_SELL')->nullable();
            $table->string('FA_CONDITION_SELL_OTHER')->nullable();
            $table->string('FA_CUSTOMER_PAYS')->nullable();
            $table->string('FA_CUSTOMER_PAYS_OTHER')->nullable();
            $table->string('FA_PROMOTION')->nullable();
            $table->string('FA_PROMOTION_OTHER')->nullable();
            $table->string('FA_LABOR')->nullable();
            $table->string('FA_VOLUME')->nullable();
            $table->string('FA_REMAINING')->nullable();
            $table->string('FA_REMAINING_CAUSE')->nullable();
            $table->string('FA_REMAINING_CAUSE_OTHER')->nullable();
            $table->string('FA_SET_PRICE')->nullable();
            $table->string('FA_PROBLEM')->nullable();

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
        Schema::dropIfExists('farmes');
    }
}
