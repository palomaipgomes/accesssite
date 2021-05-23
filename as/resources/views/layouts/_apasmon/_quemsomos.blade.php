<div class ="row section">
    <h3 align ="center"> Quem Somos</h3>
    <div class = "divider"></div>
</div>
<div class ="row selection">
    @foreach($somos as $somo)

        <div class = "card-content">
            <p align="center">{!! $somo->atuacao !!}</p>
            <p align="center">{!! $somo->missao !!}</p>
            <p align="center">{!! $somo->visao !!}</p>
            <p align="center">{!! $somo->valores !!}</p>
            <p align="center"><img src = "{{ asset($somo->organograma) }}" alt="Organograma da empresa"></a></p>
        </div>

    @endforeach
</div>