@extends('layout')
@section('pagina_titulo', 'Cadastro de usuário' )

@section('pagina_conteudo')

<div id="container-login" class="container">
    <div id="login" class="row">
        <div class="col l10 offset-l1 s12 m12">
            <h4>Cadastre-se</h4>
            <br>
            <form method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" class="validate {{ $errors->has('name') ? ' invalid' : '' }}" required autofocus>
                        <label id="name"for="name" data-error="{{ $errors->has('name') ? $errors->first('name') : null }}">Nome</label>
                    </div>
                </div>

                @include('auth._form_email')
                @include('auth._form_password')
                @include('auth._form_password_confirm')

                <div class="row">
                    <button type="submit" class="btn blue waves-effect waves-light col l6 m6 s12">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    h4 {
        font-size: 4.00rem;
    }

    #name{
        font-size: 2.00rem;  
    }

    #login {
        border-style: solid;
        border-color: #4d94ff;
        border-radius: 50px;
        border-width: 22px;
        box-shadow: 0.2em 0.1em 1.2em black;
    }
</style>

@endsection