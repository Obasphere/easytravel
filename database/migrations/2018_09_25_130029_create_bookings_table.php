<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('email');
            $table->integer('phone');
            $table->string('next_of_kin_name');
            $table->integer('next_of_kin_phone');
            $table->integer('ticket_id');
            $table->string('bus_type_id');
            $table->integer('cost_id');
            $table->string('code_id');
            $table->string('from');
            $table->string('to');
            $table->string('departure_time')->nullable();
            $table->date('departure_date');
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
        Schema::dropIfExists('bookings');
    }
}
