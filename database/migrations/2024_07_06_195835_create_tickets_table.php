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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->string('status');
            $table->foreignId('id_client')
            ->nullable()
            ->constrained('clients','id')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('id_user')
            ->nullable()
            ->constrained('users','id')
            ->cascadeOnDelete()
            ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
