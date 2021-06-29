<?php

namespace Database\Factories;

use App\Models\Ei;
use Illuminate\Database\Eloquent\Factories\Factory;

class EiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ei::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NC'=>$this ->faker->text(50),
            'DCI'=>$this ->faker->text(50),
            'CT'=>$this ->faker->text(50),
            'FIRME'=>$this ->faker->text(50),
            'DETAILS_EI'=>$this ->faker->text(50),
            'QUANTITE'=>$this ->faker->text(50),
            'ATTITUDE'=>$this ->faker->text(50),
            'URGENCE'=>$this ->faker->text(50),
            'CATEGORIE'=>$this ->faker->text(50),
            'ADRESSE'=>$this ->faker->text(50),
            'DATE'=>$this ->faker->text(50),
            'IDENTIFIANT'=>$this ->faker->text(50),
            'TEL'=>$this ->faker->text(50),
            'HOPITAL'=>$this ->faker->text(50),
            'CODE_EI'=>$this ->faker->text(50)
        ];
    }
}
