<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActDocs extends Model
{
    use HasFactory;
    protected $table = 'act_docs';

    protected $fillable = [
        'actDoc_heading',
        'actDoc_file',
    ];
}
