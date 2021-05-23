<nav>
    <div class="nav-wrapper light-green">
        <div class = "container">
        <a href=""> </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('assume.home') }}">Início</a></li>
            <li><a href="{{ route('assume.quemsomos') }}">Quem somos</a></li>
            <li><a href="{{ route('assume.servicos') }}">Servicos</a></li>
            <li><a href="{{ route('assume.noticias') }}">Notícias</a></li>
            <li><a href="{{ route('assume.equipe') }}">Equipe</a></li>
            <li><a href="{{ route('assume.transparencia') }}">Transparência</a></li>
            <li><a href="{{ route('assume.doacao') }}">Dados para doar</a></li>
            <li><a href="{{ route('assume.parceiros') }}">Parceiros</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('acinpode.home') }}">Início</a></li>
            <li><a href="{{ route('assume.quemsomos') }}">Quem somos</a></li>
            <li><a href="{{ route('assume.servicos') }}">Servicos</a></li>
            <li><a href="{{ route('assume.noticias') }}">Notícias</a></li>
            <li><a href="{{ route('assume.equipe') }}">Equipe</a></li>
            <li><a href="{{ route('assume.transparencia') }}">Transparência</a></li>
            <li><a href="{{ route('assume.doacao') }}">Dados para doar</a></li>
            <li><a href="{{ route('assume.parceiros') }}">Parceiros</a></li>
        </ul>
        </div>
    </div>
</nav>