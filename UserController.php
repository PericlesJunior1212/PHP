<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    

    public function getUsuarios(){
        $usuarios = [

            [ 'id' => 1, "nome" => "Carlos Alexandre","nome_gupo" => "admin" ],
            [ 'id' => 2, "nome" => "Germano Silva",  "nome_gupo"  => "cliente"],
            [ 'id' => 3, "nome" => "Gabriel Vicente",  "nome_gupo" => "cliente" ],
            [ 'id' => 4, "nome" => "Paulo vitor",  "nome_gupo"  => "cliente" ],
            [ 'id' => 5, "nome" => "Pedro Medeiros",  "nome_gupo"  => "cliente" ],
            [ 'id' => 6, "nome" => "Klynder ribeiro",  "nome_gupo"  => "cliente"],
            [ 'id' => 7, "nome" => "Braian souza",  "nome_gupo"  => "cliente", ],
            [ 'id' => 8, "nome" => "Joao algusto",  "nome_gupo" => "cliente"],
            [ 'id' => 9, "nome"  => "Leonardo",  "nome_gupo"  => "cliente"],
            [ 'id' => 10," nome"=> "Vanessa",  "nome_gupo"  => "cliente"],
        ];

        // $user = User::all();
        // return response()->json($user);
        return response()->json(['usuarios' => $usuarios]);
    }

    
}
