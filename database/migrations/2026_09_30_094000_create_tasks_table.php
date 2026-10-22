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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // Creates 'user_id' column and links it to the 'id' on the 'users' table
            $table->foreignId('user_id')
                    ->constrained('users')
                    ->cascadeOnDelete(); // Deletes posts if the parent user is deleted
            $table->string('task_name');
            $table->text('description')->nullable();
              $table->foreignId('priority_id')
                    ->constrained('priorities');
            $table->foreignId('status_id')
                ->constrained('statuses');
            $table->foreignId('category_id')
                ->constrained('categories');
            $table->date('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
