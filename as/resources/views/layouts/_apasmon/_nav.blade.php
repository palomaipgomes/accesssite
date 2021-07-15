<nav>
    <div class="nav-wrapper red">
        <div class = "container">
        <a href=""> <img src = "{{ asset('uploads/5e665adf10b3f6f36f791849531f356e.png')}}" width="6%" height="6%" ></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('apasmon.home') }}">Início</a></li>
            <li><a href="{{ route('apasmon.quemsomos') }}">Quem somos</a></li>
            <li><a href="{{ route('apasmon.servicos') }}">Servicos</a></li>
            <li><a href="{{ route('apasmon.noticias') }}">Notícias</a></li>
            <li><a href="{{ route('apasmon.equipe') }}">Equipe</a></li>
            <li><a href="{{ route('apasmon.transparencia') }}">Transparência</a></li>
            <li><a href="{{ route('apasmon.doacao') }}">Dados para doar</a></li>
            <li><a href="{{ route('apasmon.parceiros') }}">Parceiros</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('apasmon.home') }}">Início</a></li>
            <li><a href="{{ route('apasmon.quemsomos') }}">Quem somos</a></li>
            <li><a href="{{ route('apasmon.servicos') }}">Servicos</a></li>
            <li><a href="{{ route('apasmon.noticias') }}">Notícias</a></li>
            <li><a href="{{ route('apasmon.equipe') }}">Equipe</a></li>
            <li><a href="{{ route('apasmon.transparencia') }}">Transparência</a></li>
            <li><a href="{{ route('apasmon.doacao') }}">Dados para doar</a></li>
            <li><a href="{{ route('apasmon.parceiros') }}">Parceiros</a></li>
        </ul>
        </div>
    </div>
</nav>