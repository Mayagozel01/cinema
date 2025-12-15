<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Showtime extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'cinema_id',
        'hall_id',
        'show_time',
        'price'
    ];
    
    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }
    
    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
}
