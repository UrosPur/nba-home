@extends('layouts.default')

@section('title')
    {{ $player->name }}
@endsection


@section('content')

    <h3> Player details </h3>

    <ul class="list-group">
        <li class="list-group-item">{{ $player->first_name }}</li>
        <li class="list-group-item">{{ $player->last_name }}</li>
        <li class="list-group-item">{{ $player->email }}</li>
        <a href="{{ route('teams.show', [ 'id' => $player->team->id]) }}">
            <li class="list-group-item">Team Name : {{ $player->team->name }}</li>
        </a>
    </ul>

@endsection

