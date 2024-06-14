<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieReview extends Model
{
    protected $fillable = ['user_id', 'movie_id', 'rating', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
