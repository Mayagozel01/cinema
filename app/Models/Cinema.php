<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cinema extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'poster',
        'age_rating',
        'is_premier'
    ];
    
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    
    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }
}
