<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticeStatistiqueFactory extends Factory
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
            'TEL'=>$this ->faker->text(50),
            'IDENTIFIANT'=>$this ->faker->text(50),
            'CODE_NC'=>$this ->faker->text(50),
            'NC'=>$this ->faker->text(50),
            'DCI'=>$this ->faker->text(50),
            'JAIME'=>$this ->faker->text(50),
            'VUE'=>$this ->faker->text(50),
            'FAVORIS'=>$this ->faker->text(50),
            'ID_CODE'=>$this ->faker->text(50)
        ];
    }
}
