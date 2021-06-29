<?php

namespace Database\Factories;

use App\Models\Collaborateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollaborateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Collaborateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NOMS' =>$this -> faker -> text(50),
            'FONCTION' =>$this -> faker -> text(50)
        ];
    }
}
