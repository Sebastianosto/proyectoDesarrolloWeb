<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function issues(){
        return $this->hasMany(Issue::class);
    }

    public function user1(){
        return $this->belongsTo(User::class, 'id_user1');
    }

    public function user2(){
        return $this->belongsTo(User::class, 'id_user2');
    }

    public function user3(){
        return $this->belongsTo(User::class, 'id_user3');
    }

}
