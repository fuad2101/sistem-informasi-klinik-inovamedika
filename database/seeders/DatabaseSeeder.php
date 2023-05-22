<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        \App\Models\User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('yudistar'),
            'role'=>"Admin",
        ]);

        \App\Models\pasiens::factory(50)->create();
        \App\Models\pegawais::factory(5)->create();
        \App\Models\hrg_obats::factory(5)->create();

        DB::table('hrg_tindakans')->insert([
            array(
                'jns_tindakan'=>'EKG',
                'harga'=>40000,
            ),
            array(
                'jns_tindakan'=>'Nebulizer',
                'harga'=>40000,
            ),
            array(
                'jns_tindakan'=>'Pasang Catheter',
                'harga'=>35000,
            ),
            array(
                'jns_tindakan'=>'Pasang Infus Anak',
                'harga'=>30000,
            ),
            array(
                'jns_tindakan'=>'Pasang Infus Dewasa',
                'harga'=>25000,
            ),
            array(
                'jns_tindakan'=>'Pasang Sonde Lambung',
                'harga'=>15000,
            ),
            array(
                'jns_tindakan'=>'Perawatan Luka Ringan',
                'harga'=>35000,
            ),
        ]);
    }


}
