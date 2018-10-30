<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Anime extends Model
{
    use Rateable;

    protected $table = 'animes';

    public function watchlists()
    {
        return $this->hasMany('App\Watchlist');
    }
}
