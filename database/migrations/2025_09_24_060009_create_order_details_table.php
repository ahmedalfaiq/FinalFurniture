<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('order_details', function (Blueprint $table) {
            // $table->id(); // you don’t need this if you only want a composite PK, but it’s fine if you keep it
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('furniture_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('total_price');
            $table->timestamps();

            // Composite primary key (optional if you keep $table->id())
            $table->unique(['order_id', 'furniture_id']);

            // Foreign keys
            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('cascade');

            $table->foreign('furniture_id')
                ->references('id')->on('furniture')
                ->onDelete('cascade');
        });

        // Schema::create('order_details', function (Blueprint $table) {
        //     $table->id();
        //     $table->int('order_id');
        //     $table->int('furniture_id');
        //     $table->integer('quantity');
        //     $table->timestamps();
        //     $table->primary(['order_id', 'furniture_id']);
        //     $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        //     $table->foreign('furniture_id')->references('id')->on('furniture')->onDelete('cascade');

        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
