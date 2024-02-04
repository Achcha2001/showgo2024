<?php

// database/migrations/{timestamp}_create_lost_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostItemsTable extends Migration
{
    public function up()
    {
        Schema::create('lost_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_number');
            $table->string('lost_object');
            $table->date('date');
            $table->string('train');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lost_items');
    }
}
