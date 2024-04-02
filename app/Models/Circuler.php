<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuler extends Model
{
    use HasFactory;
    protected $table = 'circulers';

    protected $fillable = [
        'file',
        'headline',
        'post',
        'endDate',
        'form',
    ];
}
