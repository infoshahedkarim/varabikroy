<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendEmail extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'category',
        'msg',
    ];
}