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
        Schema::create('borrowings', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('item_name');
            $table->text('description');
            $table->date('date_borrow');
            $table->string('borrowing_id');
            $table->foreign('borrowing_id')->references('id')->on('users');
            $table->enum('status', ['borrowed', 'returned']);
            $table->string('person_responsibel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
