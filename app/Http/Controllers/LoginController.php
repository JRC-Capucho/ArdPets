<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('User.index');
    }

    public function create()
    {
        return view('User.create');
    }

    public function store(Request $request)
    {

        // Pegando as informacoes do usuario
        $User = [
            $request->input('CreateUserEmail'),
            $request->input('CreateUserPasswd')
        ];

        $Sql = "insert into dono (email,senha) values (?,?)";
        DB::insert($Sql, $User);
        return redirect('/iniciar-sessao');
    }

    public function login(Request $request)
    {

        $User = [$request->input('IndexUserEmail')];

        $Sql = "select id,email,senha from dono where email=?";
        $NewNome = DB::select($Sql, $User);
        foreach ($NewNome as $name) {

            $Aux = array("id" => $name->id);
            $AuxJson = json_encode($Aux);
            $file = fopen('UserJson.json', 'w');
            fwrite($file, $AuxJson);


            if ($name->email == $request->input('IndexUserEmail') && $name->senha == $request->input('IndexUserPasswd'))
                return redirect('/principal');
            else
                return redirect('/iniciar-sessao');
        }
    }
}
