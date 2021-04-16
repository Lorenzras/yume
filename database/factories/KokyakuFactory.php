<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kokyaku;

class KokyakuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kokyaku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'tenpo' => $this->faker->unique()->safeEmail,
            'tanto_id' => User::inRandomOrder()->first()->id,
            'tel' => $this->faker->phoneNumber,
            'isBuyer' => $this->faker->boolean
        ];
    }
}
