<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pasiens>
 */
class pasiensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_mr' => fake()->randomNumber(7, true),
            'tanggal_daftar'=>fake()->date(),
            'nama_pasien'=> fake()->lastName(),
            'tgl_lahir'=>fake()->date(),
            'jns_klm'=>fake()->randomElement(['L','P']),
            'agama'=>fake()->randomElement(['Islam','Kristen','Hindu','Budha']),
            'pendidikan'=>fake()->randomElement(['SD','SLTA','SLTP','S1']),
            'alamat'=>fake()->streetAddress(),
            'kecamatan'=>fake()->city(),
            'kelurahan'=>fake()->city(),
            'kota'=>fake()->state(),
            'tel'=>fake()->phoneNumber()
            // 'tanggal_tindakan' => fake()->date(),
        ];
    }
}
