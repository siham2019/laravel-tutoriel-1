<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    
    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function book()
    {
        return $this->hasOne("App\Book");
    }
}
