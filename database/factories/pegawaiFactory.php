<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_pegawai' => fake()->lastName(),
            'profesi'=>randomElement(['Dokter Umum','Apoteker','Dokter Gigi']),
            'tanggal_masuk'=> fake()->date(),
            'alamat'=>fake()->Address(),
        ];
    }
}
