<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyBspcs extends Model
{
    use HasFactory;
    protected $table = 'faculty_bspcs';

    protected $fillable = [
        'img',
        'name',
        'post',
        'phone'
    ];
}
