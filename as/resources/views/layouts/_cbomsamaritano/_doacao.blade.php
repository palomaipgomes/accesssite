<div class ="row section">
    <h3 align ="center"> Dados para doação </h3>
    <div class = "divider"></div>
</div>
<div class ="row selection">
    @foreach($doacaos as $doacao)

        <div class = "card-content">
            <p align="center">{{$doacao->conta}}</p>
            <p align="center">{{$doacao->agencia}}</p>
            <p align="center">{{$doacao->banco}}</p>
            <p align="center">{{$doacao->tipo}}</p><br><br>
        </div>

    @endforeach
</div>