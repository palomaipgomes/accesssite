<nav>
    <div class="nav-wrapper black">
        <div class = "container">
        <a href=""> <img src = "{{ asset('uploads/6c8f7765a727a21cc2bdb431e9f59ff3.png')}}" width="7%" height="7%" ></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('creser.home') }}">Início</a></li>
            <li><a href="{{ route('creser.quemsomos') }}">Quem somos</a></li>
            <li><a href="{{ route('creser.servicos') }}">Servicos</a></li>
            <li><a href="{{ route('creser.noticias') }}">Notícias</a></li>
            <li><a href="{{ route('creser.equipe') }}">Equipe</a></li>
            <li><a href="{{ route('creser.transparencia') }}">Transparência</a></li>
            <li><a href="{{ route('creser.doacao') }}">Dados para doar</a></li>
            <li><a href="{{ route('creser.parceiros') }}">Parceiros</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('creser.home') }}">Início</a></li>
            <li><a href="{{ route('creser.quemsomos') }}">Quem somos</a></li>
            <li><a href="{{ route('creser.servicos') }}">Servicos</a></li>
            <li><a href="{{ route('creser.noticias') }}">Notícias</a></li>
            <li><a href="{{ route('creser.equipe') }}">Equipe</a></li>
            <li><a href="{{ route('creser.transparencia') }}">Transparência</a></li>
            <li><a href="{{ route('creser.doacao') }}">Dados para doar</a></li>
            <li><a href="{{ route('creser.parceiros') }}">Parceiros</a></li>
        </ul>
        </div>
    </div>
</nav>