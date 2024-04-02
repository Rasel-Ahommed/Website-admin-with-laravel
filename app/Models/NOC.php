<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NOC extends Model
{
    use HasFactory;
    protected $table = 'nocs';

    protected $fillable = [
        'pdf',
        'headline',
        'date'
    ];
}
