<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained();
            $table->integer('subject');
            $table->string('title')->notNullable();
            $table->text('description')->nullable();
            $table->timestamp('deadline')->notNullable();
            $table->timestamps();
            $table->foreignId('last_update_user')->constrained('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
