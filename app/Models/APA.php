<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class APA extends Model
{
    use HasFactory;
    protected $table = 'apas';
    protected $fillable = [
        'apa_name_id',
        'headline',
        'links'
    ];
}
