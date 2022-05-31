<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_forms', function (Blueprint $table) {
            $table->id();
//            $table->string('custm_name')->nullable();
//            $table->string('custm_email')->nullable();
            $table->integer('user_id')->nullable();
            $table->longText('custm_contact')->nullable();
            $table->string('trip_dates')->nullable();
            $table->integer('adult')->nullable();
            $table->integer('child')->nullable();
            $table->string('destination')->nullable();
            $table->string('previous_travel_asia')->nullable();
            $table->string('previous_travel_arabia')->nullable();
            $table->string('previous_travel_europe')->nullable();
            $table->string('previous_travel')->nullable();
            $table->string('accomodation_facility')->nullable();
            $table->string('flight_class')->nullable();
            $table->string('car_type')->nullable();
            $table->string('age')->nullable();
            $table->string('team_assign')->nullable();
            $table->integer('team_assign_id')->nullable();
            $table->string('custm_status')->nullable();
            $table->string('upload_file')->nullable();
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
        Schema::dropIfExists('customer_forms');
    }
}
