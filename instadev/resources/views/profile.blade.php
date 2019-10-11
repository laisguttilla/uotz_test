@extends('layouts.app')

@section('content')
    <section class="d-flex row justify-content-center mt-5">

        <form method="POST" action="/profile/{id}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-row">
            <aside class="col-lg-2 col-sm-12">
                <label for="file-input">
                    <img src=" {{ url($usuario->imagem)}}" class="img-perfil2">
                </label>
                <input id="file-input" name="imagem" type="file" value="{{ old('imagem') }}">
            </aside>

            <div class="col-12 mt-4">
                <div class="form-row">

                <div class="col-md-4 mb-3">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                    value="{{ $usuario->name }}">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                    value="{{ $usuario->username }}">
                </div>

                <div class="col-md-4 mb-2">
                    <label for="endereco">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="E-mail" name="email"
                    value="{{ $usuario->email }}">
                </div>

                <div>
                    <button class="btn btn-outline-dark mt-4" type="submit">Salvar</button>
                </div>

            </div>

        </form>

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif

    </section>
@endsection