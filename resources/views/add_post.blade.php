@extends('layouts.app')

@section('content')
    <section id="index" class="container">
        <div class="col-md-12 d-flex justify-content-center mt-5">
            <article class="new-post col-md-6 py-2">

                <header class="col-12 row d-flex justify-content-center">
                    <div class="add-header p-1">
                        <h2 class="m-2">New Post</h2>
                    </div>
                </header>

                <form class="mt-5" method="post" action="/add_post" enctype="multipart/form-data">
                    @csrf
                        {{ method_field('POST') }}

                    <div class="add-photo form-group d-flex justify-content-center p-5">
                        <label for="file-input">
                            <i class="fas fa-camera fa-5x"></i>
                        </label>
                        <input id="file-input" name="imagem" type="file">
                    </div>

                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                    <div class="add-input form-group mt-2">
                        <input class="col-12 p-1" name="descricao" type="text" placeholder="Descrição">
                    </div>

                    <div class="add-input form-group">
                        <input class="col-12 p-1" name="tags" type="text" placeholder="Tags">
                    </div>

                    <div class="add_photo d-flex justify-content-end p-3">
                        <button class="btn btn-danger m-1" name="dismiss" type="submit" onclick="event.preventDefault();
                        document.getElementById('dismiss-form').submit();">Cancel</button>
                        <button class="btn btn-success m-1" type="submit">Publish</button>
                    </div>
                </form>
                <form id="dismiss-form" action="{{ '/index' }}" method="GET" style="display: none">
                </form>
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