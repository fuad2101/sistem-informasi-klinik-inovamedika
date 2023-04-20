<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        // \App\Models\User::create([
        //     'name'=>'admin',
        //     'email'=>'admin@gmail.com',
        //     'password'=>bcrypt('yudistar'),
        // ]);

        \App\Models\pasiens::factory(5)->create();
        \App\Models\pegawais::factory(5)->create();
    }
}
