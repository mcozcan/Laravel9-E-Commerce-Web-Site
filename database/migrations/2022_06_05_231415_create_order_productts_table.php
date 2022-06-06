<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_productts', function (Blueprint $table) {
            $table->id()->autoIncrement();
      
            $table->integer('user_id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('price');
            $table->integer('quantity');
            $table->float('amount');
            $table->string('note');
            $table->string('status')->default('New');
         

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
        Schema::dropIfExists('order_productts');
    }
};
