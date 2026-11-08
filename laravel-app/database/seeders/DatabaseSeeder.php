<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (DB::table('products')->count() > 0) {
            return;
        }

        DB::table('products')->insert([
            ['name' => 'Laptop Bengkel 14 inci', 'price' => 2499.00],
            ['name' => 'Tetikus tanpa wayar', 'price' => 59.90],
            ['name' => 'Papan kekunci mekanikal', 'price' => 199.00],
        ]);

        // MD5 untuk kata laluan: sengaja lemah.
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@kedai.test', 'password' => md5('admin123'), 'role' => 'admin'],
            ['name' => 'alice', 'email' => 'alice@kedai.test', 'password' => md5('kata-laluan-alice'), 'role' => 'user'],
        ]);

        DB::table('guestbook')->insert([
            ['name' => 'Aisyah', 'message' => 'Kedai yang bagus!'],
        ]);
    }
}
