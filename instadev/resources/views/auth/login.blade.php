@extends('layouts.app')

@section('content')
<section class="box-cadastro">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group col-12 text-center">
            <div class="form-group col-md-12">
                <h4 class="text-center">Login</h4>
            </div>
        </div>

        <div class="form-group row">

            <div class="col-12">
                <label for="email" class="col-form-label text-md-right label-cadastro">{{ __('E-mail') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <div class="col-12">
                <label for="password" class="col-form-label text-md-right label-cadastro">{{ __('Senha') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Lembrar-se de mim') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-5">
                <button type="submit" class="btn btn-dark">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a sua senha?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>

</section>
@endsection
