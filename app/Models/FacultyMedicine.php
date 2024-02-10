<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyMedicine extends Model
{
    use HasFactory;
    protected $table = 'faculty_medicines';

    protected $fillable = [
        'img',
        'name',
        'post',
        'phone',
        'email',
    ];
}
