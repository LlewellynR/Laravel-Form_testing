<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class FormData extends Authenticatable
{
    protected $fillable = [
        'username', 'password_hash'
    ];
    use HasFactory;
    //this specifies the password name because by default it is password
    public function getAuthPasswordName(): string
    {
        return 'password_hash';
    }
}





