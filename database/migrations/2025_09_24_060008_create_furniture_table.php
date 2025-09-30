<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('furniture', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('description', 100);
            $table->string('category', 50);
            $table->string('store_name', 50);
            $table->string('color', 20);
            $table->string('size', 10);
            $table->string('image')->nullable();
            $table->decimal('price', 8, 2);
            $table->foreignId('supplier_id')->references('id')->on('users')->onDelete('cascade');
            // $table->int('supplier_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('furniture');
    }
};
