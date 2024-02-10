<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syndicate extends Model
{
    use HasFactory;
    protected $table = 'syndicates';

    protected $fillable = [
        'img',
        'name',
        'post',
        'email',
    ];
}
