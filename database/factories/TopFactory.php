<?php

namespace Database\Factories;

use App\Models\Top;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Top::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'IDENTIFIANT'=>$this ->faker->text(50),
            'LOCK_MY'=>$this ->faker->text(50),
            'TELEPHONE'=>$this ->faker->text(50),
            'FONCTION'=>$this ->faker->text(50),
            'SAUVEGARDE'=>$this ->faker->text(50),
            'HOPITAL'=>$this ->faker->text(50),
            'PROVINCE'=>$this ->faker->text(50),
            'PAYS'=>$this ->faker->text(50),
            'CNOM'=>$this ->faker->text(50),
            'IMEI'=>$this ->faker->text(50),
            'TOP'=>$this ->faker->text(50)
        ];
    }
}
