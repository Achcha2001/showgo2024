<?php

// database/migrations/2024_02_03_create_train_box_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainBoxTable extends Migration
{
    public function up()
    {
        Schema::create('train_box', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('train_id');
            $table->foreign('train_id')->references('id')->on('trains')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('train_box');
    }
}
