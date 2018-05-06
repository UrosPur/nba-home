@extends('layouts.default')

@section('title')
    Teams View
@endsection


@section('content')

    
    <div class="list-group">
        @foreach($teams as $team)
            <a href="{{ route('teams.show', [ 'id' => $team->id]) }}"
               class="list-group-item list-group-item-action">{{ $team->name }} , {{ $team->email }}</a>
        @endforeach
    </div>

@endsection

