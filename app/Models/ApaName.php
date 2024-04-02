<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApaName extends Model
{
    use HasFactory;
    protected $table = 'apa_names';
    protected $fillable = [
        'name'
    ];
}
