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
     * Método responsável por exibir o formulário de criação de novos dados
     * @param StoreRarityRequest $request - Request validada pela Request custom
     * @return string - Retorna a View com uma mensagem de sucesso
     */
    public function store(StoreRarityRequest $request)
    {
        // Pegando os dados validados da $request
        $data = $request->validated();
        // Persistindo os dados validados
        Rarity::create($data);

        // Redirecionando para a rota de listagem de raridades com uma mensagem de feedback
        return redirect()->route('rarities.index')->with('success', 'Raridade criada com sucesso!');
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
        return view('rarityViews.edit', ['rarity'=>$rarity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRarityRequest $request, Rarity $rarity)
    {
        $data = $request->validated();

        $rarity->update($data);

        return redirect()->route('rarities.index')->with('success', 'Raridade editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rarity $rarity)
    {
        //
    }
}
