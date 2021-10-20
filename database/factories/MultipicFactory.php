<?php

namespace Database\Factories;

use App\Models\multipic;
use Illuminate\Database\Eloquent\Factories\Factory;

class MultipicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = multipic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'image'=>'https://source.unsplash.com/random',
            'id_Brand'=>$this->faker->numberBetween(1, 20)
        ];
    }
}
