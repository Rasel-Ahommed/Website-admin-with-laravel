<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $table = 'notice';
    protected $primaryKey = 'notice_id';

    protected $fillable = [
        'notice_text',
        'notice_file',
        'is_academic',
    ];
}
