<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function projects(){
        return $this->belongsTo(User::class,'id_project');
    }

}
