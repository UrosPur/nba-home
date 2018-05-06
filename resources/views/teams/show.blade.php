@extends('layouts.default')

@section('title')
    {{ $team->name }}
@endsection


@section('content')


    <ul class="list-group">
        <li class="list-group-item">Team name : {{ $team->name }}</li>
        <li class="list-group-item">Team email : {{ $team->email }}</li>
        <li class="list-group-item">Team address :  {{ $team->address }}</li>
        <li class="list-group-item">Team City : {{ $team->city }}</li>
    </ul>

    <h3>List of team players</h3>


    <div class="list-group">
        @foreach($team->player as $player)
            <a href="{{ route('players.show', [ 'id' => $player->id]) }}"
               class="list-group-item list-group-item-action">{{ $player->first_name }} {{ $player->last_name}}</a>
        @endforeach
    </div>


@endsection

