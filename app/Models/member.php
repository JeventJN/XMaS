<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    public function userXmas(){
        return $this->belongsTo(userXmas::class, 'NIP');
    }

    public function state(){
        return $this->belongsTo(state::class, 'kdState');
    }

    public function xtras(){
        return $this->belongsTo(extracurricular::class, 'kdExtracurricular');
    }
    public function chats(){
        return $this->hasMany(Chat::class, 'kdChat');
    }

    public function presences(){
        return $this->hasMany(presence::class, 'kdPresence');
    }
}
