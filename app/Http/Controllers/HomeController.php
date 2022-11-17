<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // coleta de dados no json
        $FileContent = file_get_contents('UserJson.json');
        $UserJson = json_decode($FileContent);

        // verificar id, id invalido volta para a tela de login
        if ($UserJson->id == -1)
            return view('User.index');

        //buscar dados no mysql
        $Sql = "Select nome,porte,idade from pet where id_dono=?";

        if (DB::select($Sql, [$UserJson->id]) != null) {
            $Pet = DB::select($Sql, [$UserJson->id]);
            return view('HomePage.index')->with('Pets', $Pet);
        } else {
            $Pet = DB::select($Sql,[1]);
            return view('HomePage.index')->with('Pets', $Pet);
        }


    }

    public function logout()
    {
        $Aux = array("id" => -1);
        $AuxJson = json_encode($Aux);
        $file = fopen('UserJson.json', 'w');
        fwrite($file, $AuxJson);

        return view('User.index');
    }
}
