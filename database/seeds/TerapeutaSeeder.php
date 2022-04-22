<?php

use App\Terapeuta;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;

use Ottaviano\Faker\Gravatar;

class TerapeutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $faker = FakerFactory::create();
        $faker->addProvider(new Gravatar($faker));

        $terapeutas = [
            [
                'user_id' => 1,
                'sexo' => 'M',
                'titulo' => Str::random(15),
                'descricao' => Str::random(40),
                'avatar_link' => $faker->gravatarUrl(),
                'video_apresentacao' => ''
            ],
        ];


        foreach($terapeutas as $terapeuta) {
            Terapeuta::updateOrCreate(
                [ 'user_id' => $terapeuta['user_id']],
                $terapeuta
            );
        }
    }
}
