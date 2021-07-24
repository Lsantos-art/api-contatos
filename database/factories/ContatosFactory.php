<?php

namespace Database\Factories;

use App\Models\Contatos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContatosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contatos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->safeEmail,
            "facebook_link" => 'facebook-fake.com.br',
            "linkedin_link" => 'linkedin-fake.com.br',
        ];
    }
}
