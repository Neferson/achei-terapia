<?php

use App\UserPerfil;
use Illuminate\Database\Seeder;

class UsersPerfisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfis = ['Admin', 'Terapeuta'];

        foreach($perfis as $perfil) {
            UserPerfil::updateOrCreate(
                ['perfil' => $perfil],
                ['perfil' => $perfil],
            );
        }
    }
}
