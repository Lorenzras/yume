<?php

namespace Database\Factories;

use App\Models\Nippo;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class NippoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nippo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date_today = Carbon::now()->addDays(mt_rand(-10,10))->toDateString();
        return [
            'generated_at' => $date_today,
            'user_id' => 2

        ];
    }
}
