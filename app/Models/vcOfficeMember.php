<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vcOfficeMember extends Model
{
    use HasFactory;
    protected $table = 'vc_office_members';

    protected $fillable = [
        'img',
        'name',
        'post',
        'facebook',
        'twitter',
        'linkedin'
    ];
}
