<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    use HasFactory;
    protected $table = 'mission_visions';

    protected $fillable = [
        'mv_img',
        'mv_title',
        'mv_text',
    ];
}
