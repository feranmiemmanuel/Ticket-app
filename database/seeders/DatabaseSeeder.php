<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table("departments")->insertOrIgnore([
            ['name' => 'Department 1', 'audio' => '1660093521.mp3'],
            ['name' => 'Department 2', 'audio' => '1660093521.mp3'],
            ['name' => 'Department 3', 'audio' => '1660093521.mp3'],
            ['name' => 'Department 4', 'audio' => '1660093521.mp3'],
        ],
        );
        \App\Models\Ticket::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
