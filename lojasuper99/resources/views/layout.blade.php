<!DOCTYPE html>
<html>

<head>
    <title>Loja Super 99 - @yield('pagina_titulo')</title>

    <!--Import Google Icon Font-->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" media="screen,projection">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="nav-wrapper light-blue row">
                <a class="navbar-brand" href="{{ route('index') }}" class="brand-logo col offset-l1">Loja Super 99</a>
                <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="nav-fonte" href="{{ url('/') }}">Pagina Inicial</a></li>
                    <li><a class="nav-fonte" href="#">Quem Somos</a></li>
                    @if (Auth::guest())
                    <li><a class="nav-fonte" href="{{ url('/login') }}">Entrar</a></li>
                    <li><a class="nav-fonte" href="{{ url('/register') }}">Cadastre-se</a></li>
                    @else
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown-user">
                            Olá {{ Auth::user()->name }}!<i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <ul id="dropdown-user" class="dropdown-content">
                            <li class="divider"></li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Sair
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('carrinho.index') }}">
                                    Carrinho
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('carrinho.compras') }}">
                                    Minhas Compras
                                </a>
                            </li>
                            @if(Auth::user()->id === 1)
                            <li>
                                <a href="{{ route('produto.painelAdmin') }}">
                                    Painel Administrativo
                                </a>
                            </li>
                            @endif

                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>

    </header>
    <main>
        @yield('pagina_conteudo')

        @if(!Auth::guest())
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="hide">
            {{ csrf_field() }}
        </form>
        @endif
    </main>
    <br>
    <footer class="page-footer blue fixed-bottom">
        <div class="footer-copyright">
            <div class="container">
                Em Desenvolvimento ... Nathan Levinski 2019
            </div>
        </div>
    </footer>

    <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    @stack('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".button-collapse").sideNav();
            $('select').material_select();
        });
    </script>
    <style>
        section {
            margin-top: 25px;
        }

        nav {

            height: 70px;
            box-shadow: 0.2em 0.1em 1.2em #FF0000;
        }


        .nav-fonte {
            font-size: 2.65rem;
            color: yellow;
            font-family: Stencil Std, fantasy;
            text-shadow: 0.2em 0.1em 0.2em #FF0000;

        }

        .navbar-brand {
            font-size: 4.95rem;
            color: yellow;
            font-family: Stencil Std, fantasy;
            text-shadow: 0.2em 0.1em 0.2em #FF0000;
            margin-left: 45px;
        }

        .dropdown-button {
            font-size: 1.55rem;
            color: yellow;
            font-family: Stencil Std, fantasy;
            text-shadow: 0.2em 0.1em 0.2em #FF0000;
        }

        footer {
            border-top: 1px solid #333;
            bottom: 0;
            left: 0;
            height: 80px;
            position: fixed;
            width: 100%;
            text-align: center;

        }

        #container-produtos-index {
            margin-top: 75px;
        }

        #container-login {
            margin-top: 95px;
        }

        .list-group a {
            background: #4d94ff;
            color: yellow;
            font-family: Stencil Std, fantasy;
            font-size: 2.00rem;
            text-shadow: 0.2em 0.1em 0.2em #FF0000;

        }

        /* Styles for wrapping the search box */

        .main {
            width: 50%;
            margin: 50px auto;
        }

        /* Bootstrap 3 text input with search icon */

        .has-search .form-control-feedback {
            right: initial;
            left: 0;
            color: #ccc;
            font-size: 2.00rem;
        }

        .has-search .form-control {
            padding-right: 12px;
            padding-left: 34px;
            font-size: 2.00rem;
        }

        .col-lg-2 {
            margin-top: -79px;
        }
    </style>


</body>

</html>