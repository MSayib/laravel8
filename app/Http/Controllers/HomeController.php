<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Jika controller hanya memiliki 1 method saja maka gunakan invoke
    public function __invoke()
    {
        return view('home');
    }
}
