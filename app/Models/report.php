<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;

    public function state(){
        return $this->belongsTo(state::class, 'kdState');
    }

    public function schedules(){
        return $this->belongsTo(schedule::class, 'kdSchedule');
    }
}
