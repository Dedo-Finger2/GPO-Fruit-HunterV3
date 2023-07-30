<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use App\Models\Fruit;

class AccountController extends Controller
{
    /**
     * Método responsável por retornar a View de visualização de contas
     * + as contas vindas do banco de dados
     * @return string|array - View com um array de contas
     */
    public function index()
    {
        $accounts = Account::all();

        return view('accountViews.index', ['accounts'=>$accounts]);
    }

    /**
     * Método responsável por retornar a View com o formulário de criação de contas
     * @return string - View
     */
    public function create()
    {

        $fruits = Fruit::all();

        return view('accountViews.create',['fruits'=>$fruits]);
    }

    /**
     * Método responsável por persistir os dados no banco de dados
     * @param StoreAccountRequest $request - Request validada pela Request custom
     * @return string - Redireciona o usuário com uma mensagem de sucesso
     */
    public function store(StoreAccountRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')). ".".$extension;

            $requestImage->move(public_path('img/accounts'), $imageName);

            $data['image'] = $imageName;
        }

        Account::create($data);

        return redirect()->route('accounts.index')->with('success', 'Conta criada com sucesso!');
    }

    /**
     * Método responsável por retornar a View que exibe detalhes da conta
     * @param Account $account - Conta que será visualizada
     * @return string|Account - View com a conta sendo visualizada
     */
    public function show(Account $account)
    {
        return view('accountViews.show',['account'=>$account]);
    }

    /**
     * Método responsável por retornar a View com o formulário de edição de contas
     * + a conta sendo editada
     * @return string|Account - View e um objeto do tipo Account
     * @return string - Exibe o formulário de edição de contas
     */
    public function edit(Account $account)
    {
        $fruits = Fruit::all();

        return view('accountViews.edit', ['account'=>$account, 'fruits'=>$fruits]);
    }

    /**
     * Método responsável por validar os dados e então atualizar os dados da conta
     * @param UpdateAccountRequest $request - Requisição do usuário sendo tratada pela Request especial
     * @param Account $account - conta sendo atualizada
     * @return string - Redireciona para a view de listagem de contas com uma mensagem de sucesso
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')). ".".$extension;

            $requestImage->move(public_path('img/accounts'), $imageName);

            $data['image'] = $imageName;
        }

        $account->update($data);

        return redirect()->route('accounts.index')->with('success', 'Conta editada com sucesso!');
    }

    /**
     * Método responsável por deletar uma conta
     * @param Account $account - Conta sendo deletada
     * @return string - Redireciona para a view de listagem com uma mensagem de sucesso
     */
    public function destroy(Account $account)
    {
        $account->delete();

        return redirect()->route('accounts.index')->with('success', 'Conta deletada com sucesso!');
    }
}
