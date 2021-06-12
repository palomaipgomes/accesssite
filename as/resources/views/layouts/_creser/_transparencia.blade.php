<div class ="row section">
    <h3 align ="center"> Transparência </h3>
    <div class = "divider"></div>
</div>
<div class ="row selection">
    @foreach($transparencias as $transparencia)

        <div class = "card-content">
            <b><p align="center">{{$transparencia->titulo}}</p></b>
            <p align="center"><img src = "{{ asset($transparencia->arquivo) }}" alt="transparência"></a></p>
            <p>{!! $transparencia->observacao !!}</p>
        </div>

    @endforeach
</div>