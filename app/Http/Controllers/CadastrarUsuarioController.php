<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class CadastrarUsuarioController extends Controller
{
    public function index(){
        return view('funcionario.cadastrarUsuarios');
    }

    public function store(Request $request){
        $usuarios = new Usuarios;
        $usuarios->nome = $request->nome;
        $usuarios->matricula = $request->matricula;
        $usuarios->email = $request->email;
        $usuarios->nascimento = $request->nascimento;
        $usuarios->curso = $request->curso;
        $usuarios->save();
        return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado');
    }
}
