<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/creches') }}">Inicio <span class="sr-only">(current)</span></a>
                    </li>

                    {{--<div class="container">--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">Home</a>--}}
                    @if (!Auth::guest())
                        {{--<a class="navbar-brand" href="{{ url('/creches') }}">Creches</a>--}}
<<<<<<< HEAD
                    @is('Admin')
=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Creches <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('/creches') }}">Lista de Creches</a>
                            <a class="dropdown-item" href="{{ url('/creches/create') }}">Nova Creche</a>
                        </div>
                        </li>
<<<<<<< HEAD

                        {{--<a class="navbar-brand" href="{{ url('/users') }}">Usuarios</a>--}}
=======
                        {{--<a class="navbar-brand" href="{{ url('/usuarios') }}">Usuarios</a>--}}
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Usuarios <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<<<<<<< HEAD
                                <a class="dropdown-item" href="{{ url('/users') }}">Lista de Usuarios</a>
                                <a class="dropdown-item" href="{{ url('/users/create') }}">Novo Usuario</a>
                            </div>

                        </li>

                        @endis
=======
                                <a class="dropdown-item" href="{{ url('/users') }}">Lista de Users</a>
                                <a class="dropdown-item" href="{{ url('/users/create') }}">Novo Users</a>
                            </div>

                        </li>
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Alunos <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('/alunos') }}">Lista de Alunos</a>
<<<<<<< HEAD
                                @is(['Admin','Atendente'])
                                <a class="dropdown-item" href="{{ url('/alunos/create') }}">Novo Aluno</a>
                                @endis
                              

=======
                                <a class="dropdown-item" href="{{ url('/alunos/create') }}">Novo Aluno</a>
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Matriculas <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('/matriculas') }}">Lista de Matriculas</a>
<<<<<<< HEAD

=======
                                <a class="dropdown-item" href="{{ url('/matriculas/create') }}">Nova Matricula</a>
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Salas <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('/salas') }}">Lista de Salas</a>
<<<<<<< HEAD
                                @is(['Admin','Atendente'])
                                <a class="dropdown-item" href="{{ url('/salas/create') }}">Nova Sala</a>
                                @endis
                            </div>

                        </li>
                        <!-- procurar Aluno -->
                        <li>
                            <ul class="navbar-nav mr-auto">

                            <div class="form-group">
                                <form action="{{route('busca-nome')}}" method="get">
                                    <div >
                                        <input type="text" name="nome" value="{{ old('nome') }}">
                                        <button class="btn btn-default btn-sm" type="submit">Pesquisar Aluno </button>
                                    </div>

                                </form>
                            </div>
                            </ul>
                        </li>

                    @endif
=======
                                <a class="dropdown-item" href="{{ url('/salas/create') }}">Nova Sala</a>
                            </div>

                        </li>
                @endif
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce

                <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
                    </ul>
<<<<<<< HEAD

=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    {{--<ul class="navbar-nav ml-auto">--}}
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
<<<<<<< HEAD
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
=======
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
<<<<<<< HEAD

=======
                    {{--</ul>--}}
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
            </div>
       </nav>

       <main class="py-4">
        @yield('content')
       </main>
    </div>
</div>

</body>
</html>
