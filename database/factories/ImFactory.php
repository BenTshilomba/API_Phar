<?php

namespace Database\Factories;

use App\Models\Im;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Im::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'DCI1'=>$this ->faker->text(50),
            'DCI2'=>$this ->faker->text(50),
            'IM'=>$this ->faker->text(50),
            'NIVEAU_C'=>$this ->faker->text(50)
        ];
    }
}
