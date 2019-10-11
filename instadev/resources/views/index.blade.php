@extends('layouts.app')

@section('content')
    <section id="index" class="container">
        <div class="d-flex justify-content-center">
            <article class="feed col-md-6 py-2">
                @foreach ($posts as $post)
                <div class="feed-self col-12">
                    <header class="col-12 p-1 row">
                        <div class="img-perfil d-inline-flex p-1 col-6">
                            <img class="rounded-circle img-profile" src="{{ $post->user->imagem }}" alt="img do usuario">
                            <h5 class="m-2 align-self-center">{{ $post->user->username}}</h5>
                        </div>
                        @if (Auth::user()->id == $post->user->id) 
                        <a id="navbarDropdown" class="nav-link align-self-center ml-auto" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/edit_post/' .$post->id) }}">
                                Editar
                            </a>
                        </div>
                        @endif
                        
                    </header>
                    <div class="imagem-feed">
                        <img class="w-100" src="{{ $post->imagem }}" alt="">
                    </div>
                    <div class="text-feed mt-2 mb-1">
                        <p>{{ $post->descricao }}</p>
                        <a href="#">#{{ $post->tags }}</a>
                    </div>
                    <div class="likes-feed">
                        <i class="far fa-heart fa-lg"></i>
                        <i class="far fa-comment fa-lg"></i>
                        <span>curtido por 100 pessoas</span>
                    </div>
                    <div class="feed-time p-1">
                        <p>{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                @endforeach
            </article>
        </div>

        <div class="add-icon d-flex justify-content-end p-3">
            <a href="/add_post"><i class="fas fa-plus-circle fa-3x"></i></a>
        </div>
        
    </section>
@endsection