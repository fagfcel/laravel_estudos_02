<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function showView():view
    {
        $data = [
            'value'     => 100,
            'cities'    => ['Caxias', 'Aldeias Altas', 'São João do Soter'],
            'names'     => ['a', 'b', 'c'],
            'indice'     => 1
        ];
        return view('home', $data);
    }

    public function submitForm():void
    {
        echo 'Formulario Submetido!!!';
    }

}
