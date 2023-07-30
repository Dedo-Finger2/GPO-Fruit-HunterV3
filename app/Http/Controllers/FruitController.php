<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Rarity;
use App\Http\Requests\StoreFruitRequest;
use App\Http\Requests\UpdateFruitRequest;

class FruitController extends Controller
{
    /**
     * Método responsável por retornar a View de visualização de frutas
     * + as frutas vindas do banco de dados
     * @return string|array - View com um array de frutas
     */
    public function index()
    {
        $fruits = Fruit::all(); // Pegando todos os registros do banco de dados

        return view('fruitViews.index', ['fruits'=>$fruits]);
    }

    /**
     * Método responsável por retornar a View com o formulário de criação de frutas
     * @return string - View
     */
    public function create()
    {
        $rarities = Rarity::all();

        return view('fruitViews.create', ['rarities'=>$rarities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFruitRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')). ".".$extension;

            $requestImage->move(public_path('img/fruits'), $imageName);

            $data['image'] = $imageName;
        }

        Fruit::create($data);

        return redirect()->route('fruits.index')->with('success', 'Fruta criada com sucesso!');
    }

    /**
     * Método responsável por retornar a View que exibe detalhes da fruta
     * @param Fruit $fruit - fruta que será visualizada
     * @return string|Fruit - View com a fruta sendo visualizada
     */
    public function show(Fruit $fruit)
    {
        return view('fruitViews.show', ['fruit'=>$fruit]);
    }

    /**
     * Método responsável por retornar a View com o formulário de edição de frutas
     * + a fruta sendo editada
     * @return string|Fruit - View e um objeto do tipo Fruit
     * @return string - Exibe o formulário de edição de frutas
     */
    public function edit(Fruit $fruit)
    {

        $rarities = Rarity::all();

        return view('fruitViews.edit', ['fruit'=>$fruit, 'rarities'=>$rarities]);
    }

    /**
     * Método responsável por validar os dados e então atualizar os dados da fruta
     * @param UpdateFruitRequest $request - Requisição do usuário sendo tratada pela Request especial
     * @param Fruit $fruit - fruta sendo atualizada
     * @return string - Redireciona para a view de listagem de frutas com uma mensagem de sucesso
     */
    public function update(UpdateFruitRequest $request, Fruit $fruit)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')). ".".$extension;

            $requestImage->move(public_path('img/fruits'), $imageName);

            $data['image'] = $imageName;
        }

        $fruit->update($data);

        return redirect()->route('fruits.index')->with('success', 'Fruta atualizada com sucesso!');
    }

    /**
     * Método responsável por deletar uma fruta
     * @param Fruit $fruit - Fruta sendo deletada
     * @return string - Redireciona para a view de listagem com uma msensagem de sucesso
     */
    public function destroy(Fruit $fruit)
    {
        $fruit->delete();

        return redirect()->route('fruits.index')->with('success', 'Fruta deletada com sucesso!');
    }
}
