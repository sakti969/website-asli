<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchGame extends Model
{
    protected $table = 'matches'; // Nama tabel di database
    protected $fillable = ['home_team', 'away_team', 'match_date', 'location'];
}
