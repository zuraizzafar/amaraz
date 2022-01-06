<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    
    public function user() {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function images() {
        return $this->hasMany('App\Models\Media', 'id', 'image');
    }
}