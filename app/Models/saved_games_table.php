<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\FormData;


class saved_games_table extends Model
{
    protected $table='saved_games_table';
    protected $fillable = [
        'user_id', 'grid_score'
    ];

    public function user()
    {
        return $this->belongsTo(FormData::class, 'user_id');
    }


}




