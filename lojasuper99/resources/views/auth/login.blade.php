@extends('layout')
@section('pagina_titulo', 'Login' )

@section('pagina_conteudo')

<div id="container-login" class="container">
    <div id="login" class="row">
        <div class="col l6 offset-l3 s12 m10 offset-m2">
            <h4>Login</h4>
            <br>
            <br>
            <br>
            <form method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                @include('auth._form_email')
                @include('auth._form_password')

                <div class="row">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}} id="remember" />
                    <label style="font-size:2.00rem;" for="remember">Lembre-se de mim</label>
                </div>

                <div class="row">
                    <button style="font-size:2.00rem;" type="submit" class="btn blue col l8 s12 m8">
                        Entrar
                    </button>
                </div>

                <div class="row">
                    <a class="" href="{{ url('/password/reset') }}">
                        Esqueceu sua senha?
                    </a>
                </div>

            </form>
        </div>

    </div>
</div>

<style>
    h4 {
        font-size: 4.00rem;
    }
    #login{
        border-style: solid;
        border-color:#4d94ff;
        border-radius: 50px;
        border-width: 22px;
        box-shadow: 0.2em 0.1em 1.2em black;
    }
    
</style>
@endsection