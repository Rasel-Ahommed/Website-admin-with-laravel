<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicProgram extends Model
{
    use HasFactory;
    protected $table = 'academic_programs';

    protected $fillable = [
        'img',
        'name',
        'time',
        'faculty1',
        'facultyLink1',
        'faculty2',
        'facultyLink2',
        'faculty3',
        'facultyLink3'
    ];
}
