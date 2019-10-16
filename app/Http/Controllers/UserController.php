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
        $user = User::findOrFail($id);
        return view('profile')->with('user', $user);
    }

    public function updateUser(Request $request, $id) {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'imagem' => '',
            'email' => 'required',
        ]);

        $request = request();
   
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');

        if ($request->hasfile('imagem')){
            $arquivo = $request->file('imagem')->store('uploads_perfil');
        } else {
            $arquivo = $user->imagem;
        }

        $user->save();

        return redirect('/index');
    }

    function deleteUser() {
        $user = Auth::user();

        $user->delete();

        return redirect('/index');
    }
}
