<?php

namespace Database\Factories;

use App\Models\Makam;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Makam>
 */
class MakamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Makam::class;

    public function definition()
    {
        $faker = Faker::create();

        return [
            'nama' => $faker->company(),
            'alamat' => $faker->address(),
            'agama' => "islam",
            'harga' => random_int(1000000, 3000000),
            'tempat_tersedia' => random_int(1, 100)
        ];
    }
}
