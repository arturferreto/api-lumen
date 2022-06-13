<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'autor_id' => $this->faker->numberBetween(1, 50),
            'titulo' => $this->faker->text(25),
            'subtitulo' => $this->faker->text(50),
            'descricao' => $this->faker->text(200),
            'publicado_em' => $this->faker->dateTimeBetween('-2 years'),
            'ativo' => true,
        ];
    }
}
