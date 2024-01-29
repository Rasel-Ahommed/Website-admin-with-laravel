<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvents extends Model
{
    use HasFactory;
    protected $table = 'news_events';

    protected $fillable = [
        'event_title',
        'event_text',
        'location',
        'date',
        's_time',
        'e_time',
    ];
}
