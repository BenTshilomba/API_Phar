<?php

namespace Database\Factories;

use App\Models\Protocole;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProtocoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Protocole::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CODEP'=>$this ->faker->text(50),
            'INTITULE'=>$this ->faker->text(50),
            'CATEGORIE'=>$this ->faker->text(50),
            'SERVICE'=>$this ->faker->text(50),
            'ATTESTE_SELON'=>$this ->faker->text(50),
            'ATTESTEUR'=>$this ->faker->text(50),
            'HOPITAL_ATTESTEUR'=>$this ->faker->text(50),
            'PROVINCE_ATTESTEUR'=>$this ->faker->text(50),
            'TEL_ATTESTEUR'=>$this ->faker->text(50),
            'DETAILS'=>$this ->faker->text(50),
            'AUTRES_DETAIL'=>$this ->faker->text(50),
            'DATE'=>$this ->faker->text(50),
            'PAYS'=>$this ->faker->text(50),
            'FONCTION'=>$this ->faker->text(50),
            'VALIDATION'=>$this ->faker->text(50)
        ];
    }
}
