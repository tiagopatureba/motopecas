<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorciclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorcicles', function (Blueprint $table) {
            $table->id();
            $table->string('model_name', 80);
            $table->integer('cubic_capacity');
            $table->string('fipe_code', 30);
            $table->unsignedBigInteger('brand_id')->nullable(false);
            $table->foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade');
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
        Schema::dropIfExists('motorcicles');
    }
}
