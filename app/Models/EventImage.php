<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;
    protected $table = 'event_img';

    protected $fillable = [
        'event_id',
        'e_img',
    ];
}
