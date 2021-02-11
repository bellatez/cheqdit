<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('reg');
            $table->string('fleet_num');
            $table->int('type');
            $table->string('make');
            $table->string('colour');
            $table->string('condition');
            $table->string('service_date');
            $table->string('service_doc');
            $table->string('mot_date');
            $table->string('mot_doc');
            $table->string('mileage');
            $table->string('comments');
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
        Schema::dropIfExists('vehicles');
    }
}
