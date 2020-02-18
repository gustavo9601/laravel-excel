<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;


// Generado con el comando
// php artisan make:export UsersExport --model=User

class UsersExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        $users = User::select("id", "name", "email")->get();

        $cabeceras = [
            'id',
            'name',
            'email'
        ];

        // prepend permite colocar en la primer posicion un arreglo
        $users->prepend( $cabeceras, 0, 'items');

        return $users;

        //return User::all();
    }
}
