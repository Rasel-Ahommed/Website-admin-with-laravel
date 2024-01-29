<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chancellor extends Model
{
    use HasFactory;
    protected $table = 'chancellors';

    protected $fillable =[
        'chan_img',
        'chan_name',
        'chan_about',
        'chan_web',
        'chan_fb',
        'chan_tw',
        'chan_link',
        'chan_welcome',
    ];
}
