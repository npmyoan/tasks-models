<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('name', 'like', 'A%')->orderBy('email', 'asc')->get();

        return $users;

    }

    public function store()
    {
        User::insert([
            [
                'name' => 'Yoan Estrada Blanco',
                'email' => 'yoan@test.com',
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Carmelis Hérnandez Pérez',
                'email' => 'meli@test.com',
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Ana Blanco Chávez',
                'email' => 'ana@test.com',
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Juan Ramón Estrada Ricardo',
                'email' => 'juan@test.com',
                'password' => bcrypt('123456789'),
            ],
            [
                'name' => 'Alessandro Preves Galañena',
                'email' => 'alessandro@test.com',
                'password' => bcrypt('123456789'),
            ],
        ]);

        return 'Se crearon varios registros';
    }
}
