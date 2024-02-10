<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viceChancellor extends Model
{
    use HasFactory;
    protected $table = 'vice_chancellors';

    protected $fillable = [
        'img',
        'name',
        'degree',
        'address',
        'email',
        'phone',
        'webLink',
        'Twitter',
        'facebook',
        'linkedIn',
        'about'
    ];
}
