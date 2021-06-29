<?php

namespace Database\Factories;

use App\Models\Comm;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'txtNAME' =>$this ->faker->text(50),
            'txtEMAIL' =>$this ->faker->text(50),
            'txtPHONE' =>$this ->faker->text(50),
            'txtMESSAGE'=>$this ->faker->text(50)
        ];
    }
}
