<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicCalender extends Model
{
    use HasFactory;
    protected $table = 'academic_calenders';
    protected $fillable = [
        'img'
    ];
}
