<div class ="row selection">
    @foreach($rodapes as $rodape)

        <div class = "card-content">
            <p>{{$rodape->rua}}, {{$rodape->numero}}</p>
            <p>{{$rodape->bairro}}, {{$rodape->cidade}}</p>
            <p>{{$rodape->estado}}, {{$rodape->pais}}</p>
            <p>{{$rodape->cep}}</p>
        </div>

    @endforeach
</div>