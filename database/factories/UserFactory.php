<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$BP.GFgxtFmfhRYHoks6v5eMNyVPcriHq8S/IWW36gPFOZC0BcplkG', // password
            'remember_token' => Str::random(10),
            'tipo_usuario' => $this->faker->randomElement(['Alumno','Profesor','Abogado','Investigador Independiente','Trabajador de empresa']),
            'num_identificacion' => $this->faker->randomElement([122,233,23,243,253]),
            'apellido_paterno' => $this->faker->lastName,
            'apellido_materno' => $this->faker->lastName,
            'cp' => Str::random(4),
            'telefono' => Str::random(8),
            'estatus' => $this->faker->randomElement([0,1]),
            'empresa_id' => $this->faker->randomElement([1,2,3]),

        ];
    }
}
