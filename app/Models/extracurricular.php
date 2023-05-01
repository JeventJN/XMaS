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
        'schedules',
        'latest_schedule',
        'leader'
    ];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('name', 'like', '%' . $search . '%')
            // )->orwhereHas('latest_schedule', fn($query) =>
            //     $query->where('location', 'like', '%' . $search . '%')
                    // ->orWhere('date', 'like', '%' . $search . '%')
                    // ->orWhere('timeStart', 'like', '%' . $search . '%')
                    // ->orWhere('timeEnd', 'like', '%' . $search . '%')
            )->orwhereHas('leader', fn($query) =>
                $query->whereHas('userXmas', fn($query) =>
                    $query->where('name', 'like', '%' . $search . '%')
            ))
        );

        if((isset($filters['Physique']) && isset($filters['NonPhysique'])) === false){
            $query->when($filters['Physique'] ?? false, fn($query) =>
                $query->where('category', 'like', 'Physique')
            );

            $query->when($filters['NonPhysique'] ?? false, fn($query) =>
                $query->where('category', 'like', 'Non-Physique')
            );
        }
    }

    public function members(){
        return $this->hasMany(member::class, 'kdExtracurricular', 'kdExtracurricular');
    }

    public function leader(){
        return $this->hasOne(member::class, 'kdExtracurricular', 'kdExtracurricular')->where('kdState', '=', 2);
        // return $this->hasOneThrough(userXmas::class, member::class, 'kdExtracurricular', 'NIP', 'kdExtracurricular', 'kdMember')->where('kdState', '=', 2);
    }

    public function documentations(){
        return $this->hasMany(documentation::class, 'kdExtracurricular', 'kdExtracurricular');
    }

    public function schedules(){
        return $this->hasMany(schedule::class, 'kdExtracurricular', 'kdExtracurricular')->orderBy('date', 'DESC');
    }

    public function latest_schedule(){
        return $this->hasOne(schedule::class, 'kdExtracurricular', 'kdExtracurricular')->latest('date');
        // return $this->schedules()->one()->latestOfMany();
    }
}
