<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'Samuel',
                'lastName'=>'Flores',
                'usuario'=>'Sam',
                'password'=>bcrypt('12345678'),
                'role'=>'administrador'
            ]
        )->assignRole('administrador');

        User::create(
            [
                'name'=>'Leidy',
                'lastName'=>'Patzi',
                'usuario'=>'Lei',
                'password'=>bcrypt('12345678'),
                'role'=>'user_interno'
            ]
        )->assignRole('user_interno');

    }
}
