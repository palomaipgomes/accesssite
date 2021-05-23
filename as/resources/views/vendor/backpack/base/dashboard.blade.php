@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('Bem-Vindo(a) ao AccessSite!!!') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">

        <div class="col-md-7 col-sm-12 col-xs-12"">
          <br>
          {{ trans('O AccessSite é um sistema gerenciador de site. Segue a explicação do seu menu:') }}<br><br>
          {{ trans('1) Cor do site - destinado à escolha da cor do menu do site. ') }}<br>
          {{ trans('2) OSC - Informações como nome da OSC, logomarca, descrição da logomarca e serviços. ') }}<br>
          {{ trans('3) Apresentação de fotos - Envio de fotos para apresentação no site. ') }}<br>
          {{ trans('4) Quem somos - Atuação da OSC, missão, visão, valores e organograma. ') }}<br>
          {{ trans('5) Equipe - Nome de cada integrante da equipe, cargo e foto. ') }}<br>
          {{ trans('6) Prestação de contas - Título, documento referente à transparência e observação. ') }}<br>
          {{ trans('7) Dados bancários - Conta, agência, banco, tipo da conta. ') }}<br>
          {{ trans('8) Parceiros - Nome dos parceiros, logomarca e link do site do parceiro (caso tenha). ') }}<br>
          {{ trans('9) Notícias - Título, texto e descrição da imagem (caso enviada). ') }}<br>
          {{ trans('10) Rodapé - logomarca numa dimensão menor, localização da OSC, contato e e-mail. ') }}<br>
          {{ trans('11) Redes sociais - Facebook, Instagram e WhatsApp. ') }}<br>
          {{ trans('12) Videoaula - Acesso direto ao canal do YouTube com todas as aulas de como utilizar este sistema disponibilizadas. ') }}<br><br>
        <br>
          
        <h3>
        {{ trans('Vídeo aula') }}
        </h3>

        <iframe width="420" height="240"
          src="https://www.youtube.com/embed/T6to2SbCYC4">
        </iframe>

        </div>


        <div class="col-md-5 col-sm-12 col-xs-12"">
          <br>
          <img src="{{URL::asset('/img/as.jpg')}}" align="center" alt="Logomarca do sistema AccessSite, representado pelas letras AS" height="400" width="400">
          <figcaption>Figura - Logomarca do sistema AccessSite</figcaption>
        </div>

    </div>
@endsection
