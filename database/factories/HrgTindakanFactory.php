<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hrgTindakan>
 */
class HrgTindakanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jns_tindakan'=> ['EKG', 'Nebulizer','Pasang Catheter','Pasang infus anak','Pasang infus dewasa','Pasang sonde lambung','Pasang Spalk Infus','Perawatan Luka Ringan',],

            'harga'=>[40000,40000,35000,30000,25000,15000,15000,25000],
        ];
    }
}
