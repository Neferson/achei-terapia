<?php

use App\Terapia;
use Illuminate\Database\Seeder;

class TerapiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $terapias = [
            [
                'terapia' => 'Acupuntura',
            ],
            [
                'terapia' => 'Iridologia',
            ],
            [
                'terapia' => 'Reflexoterapia',
            ],
            [
                'terapia' => 'Fitoterapia',
            ],
            [
                'terapia' => 'shiatsu',
            ],
            [
                'terapia' => 'Do-In',
            ],
            [
                'terapia' => 'Quiropraxia',
            ],
            [
                'terapia' => 'Massoterapia',
            ],
        ];


        foreach($terapias as $terapia) {
            Terapia::updateOrCreate(
                $terapia,
                $terapia
            );
        }
    }
}
