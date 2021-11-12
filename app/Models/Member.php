<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function tracks()
    {
        // return $this->hasMany(Track::class);
    }

    public function artist()
    {
        return $this->hasOne(Artist::class);
    }
}
