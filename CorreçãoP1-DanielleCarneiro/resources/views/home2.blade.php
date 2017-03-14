@extends('layout.master')

@section('content')

<div class="container">
  <img src="{{ URL::to('img/eventos.png') }}" width="1140" height="500" />
</div>

<br><br>
<div class="container well">
    <div class="col-sm-6 col-sm-offset-3">
        <h4 align="center">Sistema de Eventos</h4>
        <p align="center">Faça o gerenciamento dos seus eventos conosco!</p>
    </div>
</div>
@endsection
