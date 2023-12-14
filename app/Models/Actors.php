<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\movies;

class Actors extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function movies()
    {
        return $this->hasMany(Movies::class);
    }
}
