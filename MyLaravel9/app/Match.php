<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'team1',
        'team2',
        'score1',
        'score2',
    ];

    public function getWinner($score1, $score2) {

        if ($score1 > $score2) {

            return 'winner';
            
        }else{
            return 'loser';
        }
    }
}
