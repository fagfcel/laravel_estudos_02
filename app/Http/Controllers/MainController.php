<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function showView():view
    {
        return view('home', ['value'=> 500]);
    }

}
