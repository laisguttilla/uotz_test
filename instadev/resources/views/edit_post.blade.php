@extends('layouts.app')

@section('content')
    <section id="index" class="container">
        <div class="col-md-12 d-flex justify-content-center mt-5">
            <article class="new-post col-md-6 py-2">

                <header class="col-12 row d-flex justify-content-center">
                    <div class="add-header p-1">
                        <h2 class="m-2">Editar Post</h2>
                    </div>
                </header>

                <form method="post" class="mt-5" action= "{{ route('editpost',['id'=>$post->id]) }}" enctype="application/x-www-form-urlencoded">
                    
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="add-photo form-group d-flex justify-content-center p-5">
                        <label for="file-input">
                            <img src="{{ url($post->imagem) }}" alt="imagem do post">
                        </label>
                        <input id="file-input" name="imagem" type="file">
                    </div>

                    <input type="hidden" name="user_id" value="{{$post->id}}">

                    <div class="add-input form-group mt-2">
                        <input class="col-12 p-1" name="descricao" type="text" placeholder="Descrição" value="{{ $post->descricao }}">
                    </div>

                    <div class="add-input form-group">
                        <input class="col-12 p-1" name="tags" type="text" placeholder="Tags" value="{{ $post->tags }}">
                    </div>

                    <div class="add_photo d-flex justify-content-end p-3">
                        <button class="btn btn-success m-1" type="submit">Publicar</button>
                    </div>
                </form>
                    <div class="d-flex justify-content-end p-3">
                        <form action="/filmes/remover/{{ $post->id }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
            </article>
        </div>
    </section>

    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    @endif

@endsection