<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    protected $table = 'matches';

    public function details()
    {
        return $this->hasOne(MatchDetail::class, 'match_id');
    }
}
