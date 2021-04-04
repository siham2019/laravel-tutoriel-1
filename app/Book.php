<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function phone()
    {
        return $this->belongsTo("App\Phone");
    }
}
