@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3 align ="center"> Sobre <h3>
        <div class = "divider"></div>
    </div>
    <div class = "row selection">
        <div class = "col s12 m6">
            <img class="responsive-img" src="{{ asset('img/equipe.jpg')}}">
        </div>
        <div class = "col s12 m6">
            <h4> A Empresa </h4>
            <blockquote>
                Descrição breve  sobre a empresa.
            </blockquote>
            <p>Texto sobre a empresa.</p>
        </div>
    </div>
</div>
@endsection