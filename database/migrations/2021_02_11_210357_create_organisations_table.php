<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('postcode');
            $table->string('email');
            $table->string('telephone');
            $table->string('website');
            $table->unsignedInteger('industry_type');
            $table->unsignedInteger('company_size');
            $table->string('billing_email')->nullable();
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
        Schema::dropIfExists('organisations');
    }
}
