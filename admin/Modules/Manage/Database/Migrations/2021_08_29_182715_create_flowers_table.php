<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowers', function (Blueprint $table) {
            $table->id();

            $table->string('F_NAME')->nullable();
            $table->string('F_COMMON_NAME')->nullable();
            $table->string('F_SCIENTIFIC_NAME')->nullable();
            $table->string('F_OTHER_NAME')->nullable();
            $table->string('F_TYPE')->nullable();
            $table->string('F_OVERALL_APPEARANCE')->nullable();
            $table->string('F_NATURE_TRUNK')->nullable();
            $table->string('F_NATURE_LEAF')->nullable();
            $table->string('F_NATURE_FLOWER')->nullable();
            $table->string('F_GENERAL_INFORMATION')->nullable();
            $table->string('F_PLANT')->nullable();
            $table->string('F_PROPAGATION')->nullable();
            $table->string('F_UTILIZATION')->nullable();
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
        Schema::dropIfExists('flowers');
    }
}
