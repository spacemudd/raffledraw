<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ar_SA');

        return [
            'name' => $faker->name(),
            'contest_name' => 'saudi_founding_day_2025',
            'answer' => $faker->randomElement([1,2,3]),
            'social_user' => $faker->text(5),
            'mobile' => '05'.$faker->unique()->numberBetween(10000000, 99999999),
            'created_at' => $faker->dateTimeBetween('-1 week', 'now'),
        ];
    }
}
