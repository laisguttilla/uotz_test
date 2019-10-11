<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

class PostsController extends Controller
{
    // rotinas pagina index    
    public function posts(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('index', compact('posts'));
    }

    //pagina criando post
    public function adicionandoPost(){
        $usuario = Auth::user();
        $usuarios = User::all();
        return view('add_post', compact('usuario','usuarios'));
    }

    //salvando e validando o post na pagina criando post
    public function salvandoPost(Request $request){

        $request->validate([
            "descricao" => 'required',
            "tags" => "required"
        ]);

        // salvando caminho da imagem e armazenando-a no projeto
        // capturando imagem selecionada pelo usuário
        $arquivo = $request->file('imagem');
       
        $nomePasta = "uploads";
        // capturando o caminho até o projeto
        $arquivo->storePublicly($nomePasta);
        // caminho absoluto que sempre será utilizado o mesmo
        $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
        // capturando o tmp_name
        $nomeArquivo = $arquivo->getClientOriginalName();
        // capturando o caminho relativo dentro do projeto
        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";
        // movendo/armazenando imagem dentro do projeto
        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        // criando o post
        $posts = Post::create([
            "imagem" =>$caminhoRelativo,
            "descricao" => $request->input("descricao"),
            "tags"=> $request->input("tags"),
            "user_id"=> $request->input("user_id") 
        ]);

        $posts->save();

        return redirect('/index');
    }

    //validando os dados do post pelo banco e editando o post
    public function alterarPost(Request $request, $id) {
        $post = Post::findOrFail($id);

        $request->validate([
            'descricao' => 'required',
            'tags' => 'required',
            'user_id' => 'required',
            'imagem' => 'required'
        ]);
   
        $post->descricao = $request->input('descricao');
        $post->tags = $request->input('tags');
        $post->tags = $request->input('user_id');

        $arquivo = $request->file('imagem');

        $nomePasta = "uploads";
        $arquivo->storePublicly($nomePasta);

        $caminhoAbsoluto = public_path() . "/storage/$nomePasta";

        $nomeArquivo = $arquivo->getClientOriginalName();

        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $post->save();

        return redirect('/index');
    }

    //deletar
    function deletarPost($id) {
        $post = Post::find($id);

        $post->delete();

        return redirect('/index');
    }

}
