<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function showView():view
    {
        //method 1
        // $data = [
        //     'name' => 'Francisco Ferreira',
        //     'phone' => '123456789'
        // ];
        // return view('admin.newPage3', $data);
        
        //method 2
        // return view('admin.newPage3', 
        //     [
        //         'name' => 'Francisco Ferreira',
        //         'phone' => '123456789'
        //     ] 
        // );

        //method 3
    //     return view('admin.newPage3')
    //             ->with('name', 'Francisco Ferreira')
    //             ->with('phone', '12345678997');
        //method 4
        $name = 'Francisco Ferreira';
        $phone = '9876543213';

        return view('admin.newPage3', compact('name', 'phone'));


    }

}
