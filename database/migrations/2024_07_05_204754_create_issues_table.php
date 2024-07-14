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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('status');
            $table->date('deadline');
            $table->foreignId('id_user')
            ->nullable()
            ->constrained('users','id')
            ->nullOnDelete()
            ->cascadeOnUpdate();
            $table->timestamps();

            $table->foreignId('id_project')
            ->nullable()
            ->constrained('projects','id')
            ->nullOnDelete()
            ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
