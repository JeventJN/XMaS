<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
                // $query->where('location', 'like', '%' . $search . '%')->first()
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

        // SELECT *
        // FROM
        //     (SELECT  `extracurriculars`.kdextracurricular,`extracurriculars`.name, DATE_FORMAT(MAX(`schedules`.`date`), '%a') AS `date_max`
        //     FROM  `schedules`
        //     JOIN `extracurriculars` ON `extracurriculars`.`kdExtracurricular` = `schedules`.`kdExtracurricular`
        //     GROUP BY `extracurriculars`.kdextracurricular DESC) AS `sched_max`
        // WHERE `date_max` = 'mon';
        $data_sched = DB::table("extracurriculars")->select("*", DB::raw("(SELECT  *, DATE_FORMAT(MAX(`schedules`.`date`), '%a') AS `date_max`
                                                            FROM  `schedules`
                                                            JOIN `extracurriculars` ON `extracurriculars`.`kdExtracurricular` = `schedules`.`kdExtracurricular`
                                                            GROUP BY `extracurriculars`.kdextracurricular DESC) AS `sched_max`"));
        $query->when($filters['Mon'] ?? false, fn($query) =>
            $query->whereExists($data_sched)->where('date_max', '=', 'mon')
            // $query->whereExists(fn($query) =>
            //     // $query->pluck('date')->ismonday()->first()
            //     // $query->whereDay('date', '=', 'mon')->latest()->limit(1)
            //     // $query->whereRaw(("DATE_FORMAT(`date`, '%a') = 'mon'"))->orderBy('date', 'DESC')
            //     // $query->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
            //     //     ->firstWhere(("'DATE_FORMAT(`schedules.date`, '%a')'"),  '=',  "'mon'")->orderBy('date', 'DESC')
            //     // $query->where('date_max', '=', 'mon'))
            //     $query->select("*", DB::raw("(SELECT  *, DATE_FORMAT(MAX(`schedules`.`date`), '%a') AS `date_max`
            //     FROM  `schedules`
            //     JOIN `extracurriculars` ON `extracurriculars`.`kdExtracurricular` = `schedules`.`kdExtracurricular`
            //     GROUP BY `extracurriculars`.kdextracurricular DESC) AS `sched_max`"))->where('date_max', '=', 'mon')
            // )
        );
        if((isset($filters['Mon']) && isset($filters['Tue']) && isset($filters['Wed']) && isset($filters['Thu']) && isset($filters['Fri']) && isset($filters['Sat']) && isset($filters['Sun'])) === false){
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
        return $this->hasOne(schedule::class, 'kdExtracurricular', 'kdExtracurricular')->latest('date')->latest('timeStart');
        // return $this->schedules()->one()->latestOfMany();
    }
}
