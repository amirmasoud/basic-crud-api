<?php

namespace Database\Factories;

use App\Enums\StatusEnum;
use App\Models\Sample;
use Illuminate\Database\Eloquent\Factories\Factory;

class SampleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sample::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->word,
            'code' => $this->faker->word,
            'status' => collect(StatusEnum::toValues())->random(),
        ];
    }
}
