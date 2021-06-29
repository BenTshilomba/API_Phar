<?php

namespace Database\Factories;

use App\Models\Notice;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CODE_NC'=>$this ->faker->text(50),
            'NC'=>$this ->faker->text(50),
            'FG'=>$this ->faker->text(50),
            'DCI'=>$this ->faker->text(50),
            'CT'=>$this ->faker->text(50),
            'INDICATION'=>$this ->faker->text(50),
            'CI'=>$this ->faker->text(50),
            'DOSAGE'=>$this ->faker->text(50),
            'EI'=>$this ->faker->text(50),
            'IM'=>$this ->faker->text(50),
            'PEC'=>$this ->faker->text(50),
            'COMPOSITION'=>$this ->faker->text(50),
            'FIRME'=>$this ->faker->text(50),
            'COUT'=>$this ->faker->text(50),
            'LIEU'=>$this ->faker->text(50),
            'MA'=>$this ->faker->text(50),
            'PRECAUTION'=>$this ->faker->text(50),
            'ES'=>$this ->faker->text(50),
            'AUTRES'=>$this ->faker->text(50),
            'NOUVEAU'=>$this ->faker->text(50),
            'PAYANT'=>$this ->faker->text(50),
            'VALIDATION'=>$this ->faker->text(50)
        ];
    }
}
