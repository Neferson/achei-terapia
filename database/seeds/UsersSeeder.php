<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Néferson oliveira',
                'email' => 'tjnef@hotmail.com',
                'password' => Hash::make('Vitor@88'),
                'perfil_id' => 1
            ],
            [
                'name' => 'Luiz Bartolossi',
                'email' => 'luiz.bartolossi@acheiterapia.com.br',
                'password' => Hash::make('terapeuta1508'),
                'perfil_id' => 1
            ],
            [
                'name' => 'Luiz de Oliveira',
                'email' => 'neferson.oliveira@gmail.com',
                'password' => Hash::make('Vitor@88'),
                'perfil_id' => 2
            ]
        ];

        foreach($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
