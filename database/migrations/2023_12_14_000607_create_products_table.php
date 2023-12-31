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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('provider');
            $table->boolean('enable');
            $table->string('sex');
            $table->string('skin_problem');
            $table->string('skin_type');
            $table->text('description');
            $table->double('quantity');
            $table->double('price');
            $table->timestamps();
            $table->string('link_photo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
