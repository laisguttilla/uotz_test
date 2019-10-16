@extends('layouts.app')

@section('content')
<section class="box-cadastro">
    
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-12 text-center">
            <div class="form-group col-md-12">
                <h4 class="text-center">Cadastre-se</h4>
            </div>
        </div>
        
        <div class="form-group row">
            
            <div class="col-12">
                <label for="name" class="col-form-label text-md-right label-cadastro">{{ __('Nome') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            
                <div class="col-12">
                    <label for="username" class="col-form-label text-md-right label-cadastro">{{ __('Username') }}</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


        <div class="form-group row">

            <div class="col-md-12">
                <label for="imagem" class="col-form-label text-md-right label-cadastro">{{ __('Imagem') }} </label>
                <input type="file" id="imagem" name="imagem" class="form-control @error('imagem') is-invalid @enderror" name="imagem" value="{{ old('imagem') }}" required autocomplete="imagem" autofocus>

                @error('imagem')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <label for="email" class="col-form-label text-md-right label-cadastro">{{ __('E-mail') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ 'Email inválido' }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <label for="password" class="col-form-label text-md-right label-cadastro">{{ __('Senha') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ 'Senha inválida' }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <label for="password-confirm" class="col-form-label text-md-right label-cadastro">{{ __('Confirmar senha') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-5">
                <button type="submit" class="btn btn-dark btn-block">
                    {{ __('Salvar') }}
                </button>
            </div>
        </div>
    </form>

</section>
@endsection
