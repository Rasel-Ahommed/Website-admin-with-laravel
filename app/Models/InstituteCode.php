<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteCode extends Model
{
    use HasFactory;
    protected $table = 'institute_codes';

    protected $fillable = [
        'ins_logo',
        'ins_name',
        'ins_code',
        'web_link',
    ];
}
