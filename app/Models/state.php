<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;

    public function members(){
        return $this->hasMany(member::class, 'kdMember');
    }

    public function reports(){
        return $this->hasMany(report::class, 'kdReport');
    }
}
