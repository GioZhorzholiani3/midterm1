<?php

namespace Database\Factories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Applicant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'surname'=>$this->faker->name,
            'exp_year'=>$this->faker->randomDigit,
            'is_hired'=>$this->faker->boolean,

        ];


    }

    public function GetPost(){
        return Post::where('id','>=',0)->get();
    }

}
