<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    // protected $fillable = [''];
    protected $primaryKey = 'kdSchedule';
    protected $guarded = ['kdSchedule'];
    // protected $with = ['xtras'];

    public function xtras(){
        return $this->belongsTo(extracurricular::class, 'kdExtracurricular', 'kdExtracurricular');
    }

    public function presences(){
        return $this->hasMany(presence::class, 'kdSchedule', 'kdSchedule');
    }

    public function reports(){
        return $this->hasMany(report::class, 'kdSchedule', 'kdSchedule');
    }
}
