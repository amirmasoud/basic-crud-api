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
            'name' => $this->faker->words(5),
            'description' => $this->faker->paragraphs(5),
            'code' => $this->faker->paragraphs(10),
            'status' => collect(StatusEnum::toValues())->random(),
        ];
    }
}
