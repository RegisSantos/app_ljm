<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Rodar as migrations.
     */
    public function up(): void
    {
        Schema::create('si_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code')->unique();
            $table->string('name');
            $table->string('email')->unique();            
            $table->string('password');
            $table->unsignedTinyInteger('status')
                ->default(1)
                ->comment('1: ativo, 0: inativo');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

    }

    /**
     * Reverter as migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('si_users');
        Schema::dropIfExists('password_reset_tokens');
    }
};
