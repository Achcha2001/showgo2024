<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('seat_bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_count');
            $table->string('id_number');
            $table->date('date');
            $table->string('train_name');
            $table->string('from');
            $table->string('to');
           

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seat_bookings');
    }
}
