<?php

namespace Database\Factories;

use App\Models\Avis;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Avis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'IDENTIFIANT' =>$this ->faker->text(50),
            'HOPITAL' =>$this ->faker->text(50),
            'PROVINCE' =>$this ->faker->text(50),
            'DATE_SEND' =>$this ->faker->text(50),
            'TIME_AVIS' =>$this ->faker->text(50),
            'AVIS' =>$this ->faker->text(50),
            'CODEP' =>$this ->faker->text(50),
            'TEL' =>$this ->faker->text(50),
            'CODE_AVIS' =>$this ->faker->text(50),
            'PAYS' =>$this ->faker->text(50),
            'FONCTION' =>$this ->faker->text(50)
        ];
    }
}
