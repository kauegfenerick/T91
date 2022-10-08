<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Exceptions\BadResponse;


class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->get();
        return view('user.index')
                ->with(compact('users'));
    }
    public function create()
    {
        $user = null;
        return view('user.form')
                ->with(compact('user'));
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return redirect()
                ->route('user.index')
                ->with('success',' Cadastrado com sucesso!');
    }
    public function show(int $id)
    {
        $user = User::find($id);
        return view('user.show')
                ->with(compact('user'));
    }
    public function edit(int $id)
    {
        $user = User::find($id);
        return view('user.form')
                ->with(compact('user'));
    }
    public function update(Request $request, int $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        return redirect()
                ->route('user.index')
                ->with('success',' Atualizado com sucesso!');
    }
    public function destroy(int $id)
    {
        $user = User::find($id);        
        $user->delete();

        return redirect()
                ->route('user.index')
                ->with('danger',' Excluído com sucesso!');
    }

}
