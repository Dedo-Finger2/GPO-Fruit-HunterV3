<?php

namespace App\Http\Controllers;

use App\Models\Collection_Day;
use App\Models\Daily_Collection;
use App\Models\Fruit;
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
        $fruits = Fruit::all();

        return view('home', ['collection_days'=>$dates, 'fruits'=>$fruits]);
    }

    public function store(Request $request)
    {
        // Data atual
        $currentDate = date('Y-m-d');

        // Procurando data no banco
        $existingDay = Collection_Day::where('date' , $currentDate)->first();

        // Verificando se existe ou não a data
        if (!$existingDay) {
            $data_day = [
                'date'=>$currentDate
            ];

            $collection_day = Collection_Day::create($data_day);
            $dateId = $collection_day->id;
        } else {
            $dateId = $existingDay->id;
        }

        $data = [
            'date_id' => $dateId,
            'fruit_id' => $request['fruit_id']
        ];

        Daily_Collection::create($data);

        return redirect()->route('home')->with('success', 'Fruta adicionada com sucesso!');
    }
}
