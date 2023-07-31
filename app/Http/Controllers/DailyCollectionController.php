<?php

namespace App\Http\Controllers;

use App\Models\Collection_Day;
use App\Models\Daily_Collection;
use App\Http\Requests\StoreDaily_CollectionRequest;
use App\Http\Requests\UpdateDaily_CollectionRequest;
use App\Models\Fruit;

class DailyCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daily_collections = Daily_Collection::all();

        return view('daily_collectionViews.index', ['daily_collections'=>$daily_collections]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $dates = Collection_Day::all();
        $fruits = Fruit::all();

        return view('daily_collectionViews.create',['collection_days'=>$dates, 'fruits'=>$fruits]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDaily_CollectionRequest $request)
    {
        $data = $request->validated();

        Daily_Collection::create($data);

        return redirect()->route('daily_Collections.index')->with('Success', 'Daily collection created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daily_Collection $daily_Collection)
    {
        return view('daily_collectionViews.show', ['daily_collection'=>$daily_Collection]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daily_Collection $daily_Collection)
    {
        return view('daily_collectionViews.edit', ['daily_collection'=>$daily_Collection]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDaily_CollectionRequest $request, Daily_Collection $daily_Collection)
    {

        $data = $request->validated();

        $daily_Collection->update($data);

        return redirect()->route('daily_Collections.index')->with('Success', 'Daily collection edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daily_Collection $daily_Collection)
    {
        $daily_Collection->delete();

        return redirect()->route('daily_Collections.index')->with('Success', 'Daily collection deleted!');
    }
}
