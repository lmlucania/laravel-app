<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HospitalModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $address = $this->faker->address();  // 例）1234567 東京都新宿区西新宿2-8-1
        return [
            'public_id' => Str::uuid(),
            'name'    => $this->faker->firstName() . '病院',
            'zipcode' => $this->faker->postcode(),
            'address' => substr($address, 8),
            'phone'   => $this->faker->numberBetween(1000000000, 99999999999),
            'is_published' => true,
        ];
    }
}
