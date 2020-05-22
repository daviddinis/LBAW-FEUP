<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function answer()
    {
        return $this->hasOne('App\Answer', 'answer');
    }
}
