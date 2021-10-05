<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();            
            $table->unsignedBigInteger('boat_id');
            $table->foreign('boat_id')->references('id')->on('boats')->onUpdate('cascade')->onDelete('cascade'); 
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');  
            $table->unsignedBigInteger('order_status');
            $table->foreign('order_status')->references('id')->on('status_orders')->onUpdate('cascade')->onDelete('cascade');         
            $table->integer("time_duration");
            $table->integer("price");
            $table->text("comments");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
