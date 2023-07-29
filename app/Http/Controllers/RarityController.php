<?php

namespace App\Http\Controllers;

use App\Models\Rarity;
use App\Http\Requests\StoreRarityRequest;
use App\Http\Requests\UpdateRarityRequest;

class RarityController extends Controller
{
    /**
     * Método responsável por retornar a View de visualização de raridades
     * + as raridades vindas do banco de dados
     * @return string|array - View com um array de raridades
     */
    public function index()
    {
        $rarities = Rarity::all(); // Pegando todos os registros do banco de dados

        return view('rarityViews.index', ['rarities'=>$rarities]);
    }

    /**
     * Método responsável por retornar a View com o formulário de criação de raridades
     * @return string - View
     */
    public function create()
    {
        return view('rarityViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRarityRequest $request)
    {
        //
    }

    /**
     * Método responsável por retornar a View que exibe detalhes da raridade
     * @return string|Rarity - View com a raridade sendo visualizada
     */
    public function show(Rarity $rarity)
    {
        return view('rarityViews.show', ['rarity'=>$rarity]);
    }

    /**
     * Método responsável por retornar a View com o formulário de edição de raridades
     * + a raridade sendo editada
     * @return string|Rarity - View e um objeto do tipo Rarity
     */
    public function edit(Rarity $rarity)
    {
        return view('rarityViews.edit', ['user'=>$rarity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRarityRequest $request, Rarity $rarity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rarity $rarity)
    {
        //
    }
}
