<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchDetail extends Model
{
    protected $table = 'match_details';

    public function match()
    {
        return $this->belongsTo(Matchs::class, 'match_id');
    }
}
