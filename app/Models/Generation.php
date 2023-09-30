<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    use HasFactory;
    protected $fillables = [
        'main_id',
        'member_id',
        'gen_type',
        'status'
    ];
}
