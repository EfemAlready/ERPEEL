<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'event_id',
        'pace',
        'shooting',
        'passing',
        'agility',
        'defending',
        'overall',
        'feedback',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function Event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
