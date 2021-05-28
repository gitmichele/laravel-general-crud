@extends('layouts.main-layout')

@section('content')

    <main>
        <div class="form-container">
    
            <form method="POST" action="{{ route('store') }}">
    
                @csrf
                @method('POST')
    
                <div class="form-fields">
    
                    <label for="team1">Team1</label>
                    <input type="text" name="team1">
    
                    <label for="team2">Team2</label>
                    <input type="text" name="team2">
    
                    <label for="score1">Score 1</label>
                    <input type="number" name="score1">
    
                    <label for="score2">Score 2</label>
                    <input type="number" name="score2">
    
                </div>
    
                <div class="form-submit">
                    <button type="submit">
                        Create
                    </button>
                </div>
    
            </form>
    
        </div>
    </main>

@endsection