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
            $table->string('name')->unique();
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('postcode');
            $table->string('email');
            $table->string('telephone');
            $table->string('website');
            $table->string('billing_email')->nullable();
            $table->foreignId('industry_type')
                    ->nullable()
                    ->constrained('industry_types')
                    ->onDelete('set null');
            $table->foreignId('company_size')
                    ->nullable()
                    ->constrained('company_size')
                    ->onDelete('null');
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
