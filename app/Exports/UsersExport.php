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
            'Referencia Aliado',
            'Sku*',
            'Nombre*',
            'Descripción',
            'Marca*',
            'Stock*',
            'Tienda*',
            'Precio Por Tienda*',
            'Precio Con Descuento',
            'Descuento %',
            'Fecha Inicio Descuento',
            'Fecha Fin Descuento',
            'Categoria Producto 1*',
            'Categoria Producto  2*',
            'Categoria Producto  3*',
            'Categoria Producto  4*',
            'Imagen De Producto',
            'Categoria Combinacion (Topping)',
            'Nombre Combinacion',
            'Imagen Combinacion',
            'Precio Combinacion'
        ];

        // prepend permite colocar en la primer posicion un arreglo
        $users->prepend($cabeceras, 0, 'items');
        return $users;
        //return User::all();
    }
}
