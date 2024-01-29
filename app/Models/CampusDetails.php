<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusDetails extends Model
{
    use HasFactory;
    // table 
    protected $table = 'campus_details';

    protected $fillable = [
        'cam_img',
        'cam_title',
        'cam_text',
        'cam_map',
    ];
}
