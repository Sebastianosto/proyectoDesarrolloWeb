<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function clients(){
        return $this->belongsTo(Client::class,'id_client');
    }

    public function users(){
        return $this->belongsTo(User::class,'id_user');
    }

}
