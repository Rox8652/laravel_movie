<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Actors;

class Movies extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function actors()
    {
        return $this->belongsTo(Actors::class,'actor_id','id');
    }
}

