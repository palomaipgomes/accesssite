<div class ="row section">
    <h3 align ="center"> Notícias</h3>
    <div class = "divider"></div>
</div>
<div class ="row selection">
@if($noticias)
    @foreach($noticias as $noticia)
        <?php
        $result = substr($noticia->texto, 0, 500);$noticia->texto;
        ?>

        <div class = "card-content">
            <b><h4><p align="center">{!! $noticia->titulo !!}</p></h4></b>
            <p align="center">{!!  date( 'd/m/Y' , strtotime ($noticia->data)) !!}</p>
            <p>{!! $result !!} ...</p><br><br>
            <p align="center"><a href="artigo?id={{$noticia->id}}">Ver mais</a></p>
        </div>
______________________________________________________________________________________________________________________________________________________________________________________________________
    @endforeach
@endif
</div>