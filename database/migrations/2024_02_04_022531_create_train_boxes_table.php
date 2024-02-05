<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainBoxesTable extends Migration
{
    public function up()
    {
        // Check if the table doesn't exist before creating it
        if (!Schema::hasTable('train_boxes')) {
            Schema::create('train_boxes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('train_id');
                $table->string('name');
                $table->text('description');
               

                $table->timestamps();
            });
        }
    }

    public function down()
    {
        // Drop the table if it exists
        Schema::dropIfExists('train_boxes');
    }
}
