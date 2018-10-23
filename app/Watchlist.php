<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $table = 'watchlists';

    public function animes()
    {
        return $this->hasMany('App\Anime');
    }

    public function users()
    {
        return $this->hasOne('App\User');
    }
}
