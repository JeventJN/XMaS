<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presence extends Model
{
    use HasFactory;

    // protected $fillable = [''];
    protected $guarded = ['kdPresence'];

    public function members(){
        return $this->belongsTo(member::class, 'kdMember', 'kdMember');
    }

    public function schedules(){
        return $this->belongsTo(schedule::class, 'kdSchedule', 'kdSchedule');
    }
}
