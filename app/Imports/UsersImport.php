<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;



// Generado con el comando
// php artisan make:import UsersImport --model=User

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    // cada fila de excel, se representa en $row
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'email' => $row[1],
            'password' => bcrypt($row[2])
        ]);
    }
}
