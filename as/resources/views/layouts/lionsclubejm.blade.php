<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('lib/icones/css/materialdesignicons.min.css') }}" media="all" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title> LIONS CLUBE JM </title>


</head>

<body id = "app4-layout">
    
    <header>
        @include('layouts._lionsclubejm._nav')
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
            <div class="col l6 s12 white-text">
                    <h5 class="white-text">Endereço</h5><p>
                    

                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Opções</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="{{ route('lionsclubejm.home') }}">Início</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('lionsclubejm.quemsomos') }}">Quem somos</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('lionsclubejm.servicos') }}">Servicos</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('lionsclubejm.noticias') }}">Notícias</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('lionsclubejm.equipe') }}">Equipe</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('lionsclubejm.transparencia') }}">Transparência</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('lionsclubejm.doacao') }}">Dados para doar</a></li>
                        <li><a class="grey-text text-lighten-3" href="{{ route('lionsclubejm.parceiros') }}">Parceiros</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Desenvolvido por <a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/paloma-gomes-722698105/">Paloma Gomes</a><br>
                Universidade Federal de Ouro Preto - UFOP <br>
                Instituto de Ciências Exatas e Aplicadas - ICEA <br>
                Departamento de Engenharia da Computação e Sistemas de Informação - DECSI
            </div>
        </div>
    </footer>

    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>

    <script src="{{asset('js/init.js')}}"></script>
</body>
</html>

