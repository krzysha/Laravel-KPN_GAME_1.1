@extends('layout')

@section('content')

<div class="card uper">
<br>Wybor gracza<br />

<div class="obraz"><img src='img/{{$handGame->player}}.jpg'></div>


<br />Wybor komputera<br />

<div class="obraz"><img src='img/{{$handGame->computer}}.jpg'></div>

<br />{{ $handGame->result }}<br />

<br /><a href='{{route('game.back')}}'>Zagraj ponownie</a><br />

<table-add :records="{{ $AllTable }}"></table-add>

</div>


        <!-- 
@endsection -->