<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("type");
            $table->string("price_type");
            $table->integer("status_work_boad");
            $table->integer("status_moderation_boad"); 
            $table->integer("master_id");
            $table->integer("town_id");
            $table->integer("price_minite");
            $table->integer("price_hour");
            $table->integer("price_day");
            $table->boolean("fishing");
            $table->boolean("bathe");
            $table->boolean("diving");
            $table->text("description");
            $table->tinyInteger('max_people');
            $table->tinyInteger('max_time');
            $table->string("coordinates");         
               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boats');
    }
}
