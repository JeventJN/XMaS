<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extracurricular extends Model
{
    use HasFactory;
    // protected $fillable = [''];
    protected $guarded = ['kdExtracurricular'];
    protected $with = [
        'members',
        'schedules'
    ];

    public function members(){
        return $this->hasMany(member::class, 'kdMember');
    }

    public function documentations(){
        return $this->hasOne(documentation::class, 'kdDocumentation');
    }

    public function schedules(){
        return $this->hasMany(schedule::class, 'kdSchedule');
    }
}
