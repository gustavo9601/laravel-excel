<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

//libreria Excel
use Maatwebsite\Excel\Facades\Excel;

//libreria que permite exporta a csv
use Maatwebsite\Excel\Concerns\Exportable;
//Archivo que genera la coleccion de datos
//hp artisan make:export UsersExport --model=User
use App\Exports\UsersExport;




class UserController extends Controller
{
    public function exportExcel()
    {
        //(pasamos la coleccion, nombre del archivo, id del sotorage)
        $saveFile = Excel::store(new UsersExport , 'users-list.xlsx', 'local');

        //(coleccion de datos, 'nombre del archivo en el que se generara')
        return Excel::download(new UsersExport(), 'users-list.xlsx');
    }

    public function exportCSV()
    {
        return Excel::download(new UsersExport(), 'users-list.csv');
    }


    public function returnUsers(){


        // convirtiendo coleccion a arreglo
        $user_array = User::select("id", "name", "email")->get()->toArray();

        //dd($user_array );
        //convirtiendo de arreglo a coleccion
        $user_collection  = Collection::make($user_array);
        dd($user_collection);
    }


    public function importExcel(Request $request){
        $file = $request->file('file');
    }

}
