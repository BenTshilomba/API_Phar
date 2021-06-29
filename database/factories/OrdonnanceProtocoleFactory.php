<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdonnanceProtocoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CODEP'=>$this ->faker->text(50),
            'NC'=>$this ->faker->text(50),
            'DCI'=>$this ->faker->text(50),
            'FG'=>$this ->faker->text(50),
            'DOSE'=>$this ->faker->text(50),
            'DT'=>$this ->faker->text(50),
            'POSOLOGIE'=>$this ->faker->text(50),
            'VA'=>$this ->faker->text(50),
            'DURE'=>$this ->faker->text(50),
            'NOTE'=>$this ->faker->text(50),
            'ID_CODE'=>$this ->faker->text(50)
        ];
    }
}
