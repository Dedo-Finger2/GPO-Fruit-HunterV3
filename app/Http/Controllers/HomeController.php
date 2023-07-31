<?php

namespace App\Http\Controllers;

use App\Models\Collection_Day;
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

        $dates = Collection_Day::all();

        return view('home', ['collection_days'=>$dates]);
    }
}
