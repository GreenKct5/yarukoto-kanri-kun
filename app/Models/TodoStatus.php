<?php

namespace App\Models;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('todo_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('todo_id')->constrained();
            $table->boolean('status')->default(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('todo_statuses');
    }
}
