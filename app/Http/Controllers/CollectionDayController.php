<?php

namespace App\Http\Controllers;

use App\Models\Collection_Day;
use App\Http\Requests\StoreCollection_DayRequest;
use App\Http\Requests\UpdateCollection_DayRequest;

class CollectionDayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection_days = Collection_Day::all();

        return view('collection_dayViews.index',['collection_days'=>$collection_days]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collection_dayViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCollection_DayRequest $request)
    {
        $data = $request->validated();

        Collection_Day::create($data);

        return redirect()->route('collection_Days.index')->with('success', 'Dia criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection_Day $collection_Day)
    {
        return view('collection_dayViews.show', ['collection_Day'=>$collection_Day]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection_Day $collection_Day)
    {
        return view('collection_dayViews.edit', ['collection_Day'=>$collection_Day]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCollection_DayRequest $request, Collection_Day $collection_Day)
    {
        $data = $request->validated();

        $collection_Day->update($data);

        return redirect()->route('collection_Days.index')->with('success', 'Dia editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection_Day $collection_Day)
    {
        $collection_Day->delete();

        return redirect()->route('collection_Days.index')->with('success', 'Dia deletado com sucesso!');
    }
}
