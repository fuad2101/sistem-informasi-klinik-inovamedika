<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hrg_obats>
 */
class hrg_obatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jns_brg'=>fake()->randomElement(['Bahan Pakai Medis','Obat-obatan']),
            'jns_obat'=>fake()->randomElement(['Abbocat','Alkohol','Saccahari','Lain-Lain']),
            'nama'=>fake()->word(),
            'harga'=>fake()->randomElement([15000,25000,45000,50000]),
            'produsen'=>fake()->randomElement(['Kimia Farma','Ifars']),
        ];
    }
}
