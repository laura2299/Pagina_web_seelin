<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Archivo;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Archivo>
 */
class ArchivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
            'format'=>$this->faker->randomElement(['docx', 'pdf', 'xslx']),	
            'path'=>$this->faker->word(),
            'fecha_subida'=>$this->faker->date(),
            'categoria'=>$this->faker->randomElement(['correspondencia', 'archivo']),
            'fecha'=>$this->faker->date(),
            'estado'=>$this->faker->randomElement(['habilitado', 'inabilitado',]),
        ];
    }
}
