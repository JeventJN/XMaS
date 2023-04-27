<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presence extends Model
{
    use HasFactory;

    public function members(){
        return $this->belongsTo(member::class, 'kdMember');
    }

    public function schedules(){
        return $this->belongsTo(schedule::class, 'kdSchedule');
    }
}
