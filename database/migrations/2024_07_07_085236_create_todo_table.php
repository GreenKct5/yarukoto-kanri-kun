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
        Schema::create('todos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('subject_id', 36);
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('deadline');
            $table->timestamps(0);
            $table->char('last_update_user', 36);
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('last_update_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo');
    }
};
