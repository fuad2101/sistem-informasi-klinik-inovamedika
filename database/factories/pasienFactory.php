<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_rm' => $faker->randomNumber(7, true),
            'tanggal_daftar'=>$faker->date(),
            'nama_pasien'=> $faker->lastName(),
            'tgl_lahir'=>$faker->date(),
            'jns_klm'=>$faker->randomElements(['L','P']),
            'agama'=>$faker->randomElements(['Islam','Kristen','Hindu','Budha']),
            'pendidikan'=>$faker->randomElements(['SD','SLTA','SLTP','S1']),
            'tanggal_tindakan' => $faker->date(),

        ];
    }
}
