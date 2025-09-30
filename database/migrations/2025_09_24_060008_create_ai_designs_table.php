<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('ai_designs', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }


    public function up()
    {
        Schema::create('ai_designs', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('furniture_image')->nullable();
            $table->string('room_image')->nullable();
            $table->string('final_design')->nullable();
            $table->foreignId('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('admin_id')->references('id')->on('users')->onDelete('cascade');
            // $table->bigIncrements('customer_id')->nullable();
            // $table->bigIncrements('admin_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_designs');
    }
};
