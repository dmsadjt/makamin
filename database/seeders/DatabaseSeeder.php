<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Makam;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Makam::factory()->count(20)->create();

        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@makamin.com',
            'password' => Hash::make('pass@admin'),
            'type' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@makamin.com',
            'password' => Hash::make('pass@user'),
            'type' => 0,
        ]);

        DB::table('users')->insert([
            'name' => 'Makam',
            'email' => 'makam@makamin.com',
            'password' => Hash::make('pass@makam'),
            'type' => 2,
        ]);
    }
}
