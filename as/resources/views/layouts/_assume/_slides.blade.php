<div class="slider">
	<ul class="slides">
	@foreach($slideshows as $slideshow)	
    <li onclick="window.location='{{ $slideshow->imagem }}'">
		<img src="{{ asset($slideshow->imagem) }}" alt="Imagem">
    </li>
	@endforeach	
	</ul>
</div>