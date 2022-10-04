<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Spatie\FlareClient\Http\Exceptions\BadResponse;


class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios =  Usuario::orderBy('usuario');
        return view('usuario.index')
        ->with(compact('usuarios'));
    }
    public function create()
    {
        $usuario = null;
        return view('usuario.form')
                ->with(compact('usuario'));
    }
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->fill($request->all());
        $usuario->save();

        return redirect()
                ->route('usuario.index')
                ->with('success',' Cadastrado com sucesso!');
    }
    public function show(int $id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.show')
                ->with(compact('usuario'));
    }
    public function edit(int $id)
    {
        $usuario = Usuario::find($id);
        return view('usuario.form')
                ->with(compact('usuario'));
    }
    public function update(Request $request, int $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();

        return redirect()
                ->route('usuario.index')
                ->with('success',' Atualizado com sucesso!');
    }
    public function destroy(int $id)
    {
        $usuario = Usuario::find($id);        
        $usuario->delete();

        return redirect()
                ->route('usuario.index')
                ->with('danger',' Excluído com sucesso!');
    }

}
