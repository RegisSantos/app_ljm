<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Popular o banco de dados da aplicação com o usuário padrão.
     */
    public function run(): void
    {
        DB::table('si_users')->insertOrIgnore([
            'id' => 1,
            'code' => 1001,
            'name' => 'Admin',
            'email' => 'admin@ljmarcenaria.com',
            'password' => Hash::make('password'),
            'status' => 1,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
