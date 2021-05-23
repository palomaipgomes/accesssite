<div class ="row section">
    <h3 align ="center"> Equipe</h3>
    <div class = "divider"></div>
</div>
<div class ="row selection">
@foreach($times as $time)
    <div class ="col s12 m3">
        <div class = "card">
            <div class = "card-image">
                <img src = "{{ asset($time->foto) }}" alt="Imagem"></a>
            </div>
            <div class = "card-content">
                <p><b>{{$time->nome}}</b></p>
                <p>{{$time->cargo}}</p>
            </div>
        </div>
    </div>
@endforeach
</div>