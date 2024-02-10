<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyNursing extends Model
{
    use HasFactory;
    protected $table = 'faculty_nursings';

    protected $fillable = [
        'img',
        'name',
        'post',
        'phone',
        'email'
    ];
}
