<div class ="row section">
    <h3 align ="center"> Serviços prestados</h3>
    <div class = "divider"></div>
</div>
<div class ="row selection">
    @foreach($oscs as $osc)

        <div class = "card-content">
            <p align="center">{!! $osc->servicos !!}</p>
        </div>

    @endforeach
</div>