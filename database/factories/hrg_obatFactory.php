<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hrg_obats>
 */
class hrg_obatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jns_brg'=>fake()->randomElements(['Bahan Pakai Medis','Obat-obatan']),
            'jns_obat'=>fake()->randomElements(['Abbocat','Alkohol','Saccahari','Lain-Lain']),
            'nama'=>fake()->words(),
            'harga'=>fake()->randomElements([15000,25000,45000,50000]),
            'produsen'=>fake()->randomElements(['Kimia Farma','Ifars']),
        ];
    }
}
