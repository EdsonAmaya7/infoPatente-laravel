<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\patentes;

class patentesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = patentes::class;
    public function definition()
    {

            //
            return [
                'nombre' =>  $this->faker->name,
                'pais_presentacion' => $this->faker->randomElement(['Mexico','España','USA']),
                'entidad_pequenia' => $this->faker->randomElement([0,1]),
                'tipo' => $this->faker->randomElement(['utilidad','diseño','planta']),
                'aplicacion' => $this->faker->randomElement(['Provisional','No Provisional','Etapa Nacional','PCT']),
                'email_registro' => $this->faker->unique()->safeEmail,
                'autorizacion' => 'AUTORIZACION',
                // 'representantes_id' => $this->faker->randomElement([1,2,3]),
                'representantes_id' => $this->faker->randomElement([1,2]),
                // 'cecionario_id' => $this->faker->randomElement([1,2,3]),
                'cecionario_id' => $this->faker->randomElement([1,2,3]),
            ];
    }
}
