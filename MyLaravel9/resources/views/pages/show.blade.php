@extends('layouts.main-layout')

@section('content')
    <main>

        <div class="this-match">
            <div class="{{$match -> getWinner($match -> score1, $match -> score2)}}">
                {{ $match -> team1 }}: {{ $match -> score1 }}
            </div>
        
            <div class="{{$match -> getWinner($match -> score2, $match -> score1)}}">
                {{ $match -> team2 }}: {{ $match -> score2 }}
            </div>
        </div>

        <div class="buttons">
            <div class="edit-match">
                <a href="{{ route('edit', $match -> id)}}">
                    Edit
                </a>
            </div>

            <div class="delete-match">
                <a href="{{ route('destroy', $match -> id) }}">
                    Delete
                </a>
            </div>
        </div>

    </main>
@endsection