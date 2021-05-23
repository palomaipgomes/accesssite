<div class ="row section">
    <h3 align ="center"> Parcerias e Convênios</h3>
    <div class = "divider"></div>
</div>
<div class ="row selection">
@foreach($parceiros as $parceiro)
    <div class ="col s12 m3">
        <div class = "card">
            <div class = "card-image">
                <img src = "{{ asset($parceiro->logo) }}" alt="Imagem"></a>
            </div>
            <div class = "card-content">
                <p><b>{{$parceiro->nome}}</b></p>
                <p>{{$parceiro->link}}</p>
                <p>{{$parceiro->tipo}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>