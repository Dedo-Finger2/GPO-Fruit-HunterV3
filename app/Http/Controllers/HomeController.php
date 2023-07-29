<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Método responsável por retornar a View de Home da aplicação
     * Também será retornado os dias de coleta futuramente.
     * @return string
     */
    public function index()
    {
        return view('home');
    }
}
