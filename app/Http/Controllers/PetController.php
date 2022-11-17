<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{

    public function store(Request $request)
    {
        $FileContent = file_get_contents('UserJson.json');
        $UserJson = json_decode($FileContent);

        $Pet = [
            $UserJson->id,
            $request->input('CreatePetName'),
            $request->input('CreatePetPorte'),
            $request->input('CreatePetIdade'),
            $request->input('CreatePetTime')
        ];

        dd($request->input('CreatePetTime');
        $Sql = "insert into pet values (?,?,?,?,time_format(?,"%H:%i"))";
        DB::insert($Sql,$Pet);
        return redirect('/principal');
    }
}
