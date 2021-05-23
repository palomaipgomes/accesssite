<nav>
    <div class="nav-wrapper green">
        <div class = "container">
        <a href=""> <img src = "{{ asset('uploads/c2ef7ffb0baacd72d63515eb4b35ea81.jpg')}}" width="15%" height="15%" ></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('acinpode.home') }}">Início</a></li>
            <li><a href="{{ route('acinpode.quemsomos') }}">Quem somos</a></li>
            <li><a href="{{ route('acinpode.servicos') }}">Servicos</a></li>
            <li><a href="{{ route('acinpode.noticias') }}">Notícias</a></li>
            <li><a href="{{ route('acinpode.equipe') }}">Equipe</a></li>
            <li><a href="{{ route('acinpode.transparencia') }}">Transparência</a></li>
            <li><a href="{{ route('acinpode.doacao') }}">Dados para doar</a></li>
            <li><a href="{{ route('acinpode.parceiros') }}">Parceiros</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('acinpode.home') }}">Início</a></li>
            <li><a href="{{ route('acinpode.quemsomos') }}">Quem somos</a></li>
            <li><a href="{{ route('acinpode.servicos') }}">Servicos</a></li>
            <li><a href="{{ route('acinpode.noticias') }}">Notícias</a></li>
            <li><a href="{{ route('acinpode.equipe') }}">Equipe</a></li>
            <li><a href="{{ route('acinpode.transparencia') }}">Transparência</a></li>
            <li><a href="{{ route('acinpode.doacao') }}">Dados para doar</a></li>
            <li><a href="{{ route('acinpode.parceiros') }}">Parceiros</a></li>
        </ul>
        </div>
    </div>
</nav>