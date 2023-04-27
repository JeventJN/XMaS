<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    public function xtras(){
        return $this->belongsTo(extracurricular::class, 'kdExtracurricular');
    }

    public function presences(){
        return $this->hasMany(presence::class, 'kdPresence');
    }

    public function reports(){
        return $this->hasMany(report::class, 'kdReport');
    }
}
