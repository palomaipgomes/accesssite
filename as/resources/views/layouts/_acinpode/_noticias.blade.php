<div class ="row section">
    <h3 align ="center"> Notícias</h3>
    <div class = "divider"></div>
</div>
<div class ="row selection">
@if($noticias)
    @foreach($noticias as $noticia)

        <div class = "card-content">
            <b><h4><p align="center">{!! $noticia->titulo !!}</p></h4></b>
            <p align="center">{!!  date( 'd/m/Y' , strtotime ($noticia->data)) !!}</p>
            <p>{!! $noticia->texto !!}</p><br><br>
        </div>

         <!-- AddToAny BEGIN -->
         <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                  <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                  <a class="a2a_button_facebook"></a>
                  <a class="a2a_button_twitter"></a>
                  <a class="a2a_button_email"></a>
                  <a class="a2a_button_whatsapp"></a>
                  <a class="a2a_button_linkedin"></a>
                  <a class="a2a_button_pinterest"></a>
                  </div>
                  <script async src="https://static.addtoany.com/menu/page.js"></script>
                  <!-- AddToAny END -->

    @endforeach
@endif
</div>