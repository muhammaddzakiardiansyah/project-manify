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
        Schema::create('all_items', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('item_name');
            $table->string('amount');
            $table->enum('status', ['active', 'broken', 'mainten', 'stock']);
            $table->string('place');
            $table->text('description');
            $table->string('author_id');
            $table->foreign('author_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_items');
    }
};
