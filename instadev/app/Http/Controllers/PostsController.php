<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    // rotinas pagina index    
    public function posts(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('index', compact('posts'));
    }

    //pagina criando post
    public function addPost(){
        $user = Auth::user();
        $users = User::all();
        return view('add_post', compact('usuario','usuarios'));
    }

    //salvando e validando o post na pagina criando post
    public function savePost(Request $request){

        $request->validate([
            "descricao" => 'required',
            "tags" => "required"
        ]);

        // salvando caminho da imagem e armazenando-a no projeto
        $arquivo = $request->file('imagem')->store('uploads');

        // criando o post
        $posts = Post::create([
            "imagem" =>$arquivo,
            "descricao" => $request->input("descricao"),
            "tags"=> $request->input("tags"),
            "user_id"=> $request->input("user_id") 
        ]);

        $posts->save();

        return redirect('/index');
    }

    //mostrar o post para alterar por id
    public function showPost($id) {
        $post = Post::findOrFail($id);
        return view('edit_post', compact('post'));
    }

    //validando os dados do post pelo banco e editando o post
    public function updatePost(Request $request, $id) {
        $post = Post::findOrFail($id);

        $request->validate([
            'descricao' => 'required',
            'tags' => 'required',
            'user_id' => 'required',
            'imagem' => ''
        ]);

        $post->descricao = $request->input('descricao');
        $post->tags = $request->input('tags');
        $post->user_id = $request->input('user_id');

        if ($request->hasfile('imagem')){
            $arquivo = $request->file('imagem')->store('uploads');
        } else {
            $arquivo = $post->imagem;
        }

        $post->save();

        return redirect('/index');
    }

    //deletar
    function deletePost($id) {
        $post = Post::find($id);

        $post->delete($id);

        return redirect('/index');
    }

}
