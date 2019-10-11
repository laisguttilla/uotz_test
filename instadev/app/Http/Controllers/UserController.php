<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{

    public function profile($id){
        $usuario = User::findOrFail($id);
        return view('profile')->with('usuario', $usuario);
    }

    public function alterarUsuario(Request $request, $id) {
        $usuario = User::findOrFail($id);

        dd($usuario);

        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'imagem' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
   
        $usuario->name = $request->input('name');
        $usuario->username = $request->input('username');
        $usuario->email = $request->input('email');
       
        $request = request();

        $arquivo = $request->file('imagem');

        $nomePasta = "uploads_perfil";
        $arquivo->storePublicly($nomePasta);

        $caminhoAbsoluto = public_path() . "/storage/$nomePasta";

        $nomeArquivo = $arquivo->getClientOriginalName();

        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $usuario->save();


        return redirect('/index');
    }

    function deletarUsuario() {
        $user = Auth::user();

        $user->delete();

        return redirect('/index');
    }
}
