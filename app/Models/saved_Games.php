<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class saved_Games extends Authenticatable
{
    protected $fillable = [
        'user_id', 'grid_score'
    ];
    use HasFactory;
}




