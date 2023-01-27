<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->hasMany(question::class);
    }

    public function video()
    {
        return $this->hasMany(videos::class);
    }
}
