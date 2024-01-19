<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PeopleFactory>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
           'name'=>$this->faker->name,
           'mobile'=>$this->faker->biasedNumberBetween($min = 111111111, $max = 999999999, $function = 'sqrt'),
           'city'=>$this->faker->city,
           'street'=>$this->faker->streetName,
           'age'=>$this->faker->biasedNumberBetween($min = 1, $max = 99, $function = 'sqrt'),
           'country'=>$this->faker->country,
        ];
    }
    
    
}