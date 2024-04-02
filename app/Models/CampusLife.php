<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusLife extends Model
{
    use HasFactory;

    protected $table = 'campus_life';
    protected $fillable = [
        'img'
    ];

}
