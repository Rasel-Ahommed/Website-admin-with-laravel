<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActText extends Model
{
    use HasFactory;
    protected $table = 'act_texts';

    protected $fillable = [
        'act_heading',
        'act_title',
        'act_text'
    ];
}
