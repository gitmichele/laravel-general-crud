@extends('layouts.main-layout')

@section('content')
    <main>

        <div class="create-match">
            <a href="{{ route('create') }}">
                Add match
            </a>
        </div>

        <ul>
            @foreach ($matches as $match)
                <li>
                    <a href="{{ route('show', $match -> id) }}">
                        {{ $match -> team1 }} vs {{ $match -> team2 }} 
                    </a>
                </li>
            @endforeach
        </ul>

    </main>
@endsection