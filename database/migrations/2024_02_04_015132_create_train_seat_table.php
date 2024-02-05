<?php

// database/migrations/2024_02_04_000000_create_train_seat_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainSeatTable extends Migration
{
    public function up()
    {
        Schema::create('train_seat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('train_id');
            $table->foreign('train_id')->references('id')->on('trains')->onDelete('cascade');
            
            $table->integer('seat_number');
            $table->boolean('is_reserved')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('train_seat');
    }
}
