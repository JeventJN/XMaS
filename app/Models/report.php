<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class report extends Model
{
    use HasFactory;

    // protected $fillable = [''];
    protected $primaryKey = 'kdReport';
    protected $guarded = ['kdReport'];
    protected $with = ['schedules'];

    public function state(){
        return $this->belongsTo(state::class, 'kdState', 'kdState');
    }

    public function schedules(){
        return $this->belongsTo(schedule::class, 'kdSchedule', 'kdSchedule');
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
            // )->orWhereIn('kdExtracurricular', fn($query) =>
            //             $query->select('kdExtracurricular')
            //                 ->from(fn($query) =>
            //                         $query->select(DB::raw("'extracurriculars.kdExtracurricular' as `kd`, MAX(`schedules`.`DATE`)"))
            //                             ->from('schedules')
            //                             ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
            //                             ->groupBy('extracurriculars.kdExtracurricular')
            //                             , 'recent_sched')
            //                 )->where(fn($query) =>
            //                             $query->where('location', 'like', '%'.$search.'%')
            //                                 ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`date`, '%a')"), 'like', '%'.$search.'%')
            //                                 ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`timeStart`, '%H.%i')"), 'like', '%'.$search.'%')
            //                                 ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`timeEnd`, '%H.%i')"), 'like', '%'.$search.'%')
                                    // )
            // )->orWhereIn('kdExtracurricular', fn($query) =>
            //     $query->select('kdExtracurricular')
            //         ->from('schedules')
            //         ->whereIn('kdschedule', fn($query) =>
            //             $query->select('kd')
            //                 ->from(fn($query) =>
            //                         $query->select(DB::raw("`schedules`.`kdschedule` as `kd`, MAX(`schedules`.`DATE`)"))
            //                             ->from('schedules')
            //                             ->groupBy('schedules.kdExtracurricular'), 'recent_sched')
            //                 )->where(fn($query) =>
            //                             $query->where('location', 'like', '%'.$search.'%')
            //                                 ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`date`, '%a')"), 'like', '%'.$search.'%')
            //                                 ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`timeStart`, '%H.%i')"), 'like', '%'.$search.'%')
            //                                 ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`timeEnd`, '%H.%i')"), 'like', '%'.$search.'%')
            //                         )

            // SELECT `schedules`.`kdExtracurricular`, `schedules`.`location`,`schedules`.`kdschedule` as `kd`, `date`
            // FROM `schedules`
            // INNER JOIN (SELECT `schedules`.`kdExtracurricular`, MAX(`schedules`.`DATE`) AS `data`, DATE_FORMAT(MAX(`schedules`.`date`), '%a') FROM `schedules` GROUP BY `schedules`.`kdExtracurricular`  ) AS `a` ON `schedules`.`kdExtracurricular` = `a`.`kdExtracurricular` AND `schedules`.`date` = `a`.`data`
            ->orWhere(fn($query) =>
                $query->orWhereIn(DB::raw('`reports`.kdSchedule'), fn($query) =>
                //     ->from('schedules')
                //     ->whereIn('kdschedule', fn($query) =>
                        $query->select('kdSchedule')
                            ->from('schedules')
                            ->JOIN(DB::raw("(SELECT `kdExtracurricular` AS `kd`, MAX(`DATE`) AS `recent_date` FROM `schedules` GROUP BY `kdExtracurricular`) AS `recent_sched`"), fn($join) =>
                                      $join->on(DB::raw("`recent_sched`.`kd`"), '=', DB::raw("`schedules`.`kdExtracurricular`")))
                            ->where(DB::raw("`recent_sched`.`recent_date`"),  '=', DB::raw("`schedules`.`date`"))
                            ->where(fn($query) =>
                                        $query->Where(DB::raw("DATE_FORMAT(`schedules`.`date`, '%d')"), 'like', '%'.$search.'%')
                                            ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`date`, '%M')"), 'like', '%'.$search.'%')
                                            ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`date`, '%Y')"), 'like', '%'.$search.'%'))
                        ))

                // ->orwhereHas('latest_schedule', fn($query) =>
                // $query->where('location', 'like', '%' . $search . '%')->first()
                    // ->orWhere('date', 'like', '%' . $search . '%')
                    // ->orWhere('timeStart', 'like', '%' . $search . '%')
                    // ->orWhere('timeEnd', 'like', '%' . $search . '%')
            ->orwhereHas('leader', fn($query) =>
                $query->whereHas('userXmas', fn($query) =>
                    $query->where('name', 'like', '%' . $search . '%')
            ))
        ));

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
        // $data_sched = DB::table("extracurriculars")->select("*", DB::raw("(SELECT  *, DATE_FORMAT(MAX(`schedules`.`date`), '%a') AS `date_max`
        //                                                     FROM  `schedules`
        //                                                     JOIN `extracurriculars` ON `extracurriculars`.`kdExtracurricular` = `schedules`.`kdExtracurricular`
        //                                                     GROUP BY `extracurriculars`.kdextracurricular DESC) AS `sched_max`"))
        //                                         ->where('date_max', '=', 'mon');
        $day = [];
        if((isset($filters['asc']))){
            $query->whereIn(DB::raw('`reports`.kdSchedule'), fn($query) =>
                $query->select('kdSchedule')
                    ->from(fn($query) =>
                            $query->select(DB::raw(" `schedules`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
                                ->from('schedules')
                                // ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
                                ->groupBy('schedules.kdExtracurricular')
                    )->whereIn('date_max', $day)->reorder('kdExtracurricular')
            );
            $query->when($filters['asc'] ?? false, fn($query) =>
                $query->where('category', 'like', 'asc')
            );

            $query->when($filters['NonPhysique'] ?? false, fn($query) =>
                $query->where('category', 'like', 'Non-Physique')
            );
        }
        if((isset($filters['asc']) || isset($filters['desc']))){
            if(isset($filters['asc']) === true){
                $day[] = ['asc'];
            }
            if(isset($filters['desc']) === true){
                $day[] = ['desc'];
            }
            if(isset($filters['Wed']) === true){
                $day[] = ['Wed'];
            }
            if(isset($filters['Thu']) === true){
                $day[] = ['Thu'];
            }
            if(isset($filters['Fri']) === true){
                $day[] = ['Fri'];
            }
            if(isset($filters['Sat']) === true){
                $day[] = ['Sat'];
            }
            if(isset($filters['Sun']) === true){
                $day[] = ['Sun'];
            }
            $query->whereIn(DB::raw('`extracurriculars`.kdExtracurricular'), fn($query) =>
                $query->select('kdExtracurricular')
                    ->from(fn($query) =>
                            $query->select(DB::raw(" `schedules`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
                                ->from('schedules')
                                // ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
                                ->groupBy('schedules.kdExtracurricular')
                    )->whereIn('date_max', $day)->reorder('kdExtracurricular')
            );
        }

        return $query;

        // if((isset($filters['Mon']) && isset($filters['Tue']) && isset($filters['Wed']) && isset($filters['Thu']) && isset($filters['Fri']) && isset($filters['Sat']) && isset($filters['Sun'])) === false){
        //     $query->when($filters['Mon'] ?? false, fn($query) =>
        //         $query->whereIn('kdExtracurricular', fn($query) =>
        //             $query->select('kdExtracurricular')
        //                 ->from(fn($query) =>
        //                         $query->select(DB::raw(" `extracurriculars`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                             ->from('schedules')
        //                             ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                             ->groupBy('extracurriculars.kdExtracurricular')
        //                 )->where('date_max', '=', 'Mon')->reorder('kdExtracurricular')
        //         )
        //     );
        //     $query->when($filters['Tue'] ?? false, fn($query) =>
        //         $query->whereIn('kdExtracurricular', fn($query) =>
        //             $query->select('kdExtracurricular')
        //                 ->from(fn($query) =>
        //                         $query->select(DB::raw(" `extracurriculars`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                             ->from('schedules')
        //                             ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                             ->groupBy('extracurriculars.kdExtracurricular')
        //                 )->whereRaw("`date_max` = 'Tue'")->reorder('kdExtracurricular')
        //         )
        //     );
        //     $query->when($filters['Wed'] ?? false, fn($query) =>
        //         $query->whereIn('kdExtracurricular', fn($query) =>
        //             $query->select('kdExtracurricular')
        //                 ->from(fn($query) =>
        //                         $query->select(DB::raw(" `extracurriculars`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                             ->from('schedules')
        //                             ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                             ->groupBy('extracurriculars.kdExtracurricular')
        //                 )->whereRaw("`date_max` = 'Wed'")->reorder('kdExtracurricular')
        //         )
        //     );
        //     $query->when($filters['Thu'] ?? false, fn($query) =>
        //         $query->whereIn('kdExtracurricular', fn($query) =>
        //             $query->select('kdExtracurricular')
        //                 ->from(fn($query) =>
        //                         $query->select(DB::raw(" `extracurriculars`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                             ->from('schedules')
        //                             ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                             ->groupBy('extracurriculars.kdExtracurricular')
        //                 )->whereRaw("`date_max` = 'Thu'")->reorder('kdExtracurricular')
        //         )
        //     );
        //     $query->when($filters['Fri'] ?? false, fn($query) =>
        //         $query->whereIn('kdExtracurricular', fn($query) =>
        //             $query->select('kdExtracurricular')
        //                 ->from(fn($query) =>
        //                         $query->select(DB::raw(" `extracurriculars`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                             ->from('schedules')
        //                             ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                             ->groupBy('extracurriculars.kdExtracurricular')
        //                 )->whereRaw("`date_max` = 'Fri'")->reorder('kdExtracurricular')
        //         )
        //     );
        //     $query->when($filters['Sat'] ?? false, fn($query) =>
        //         $query->whereIn('kdExtracurricular', fn($query) =>
        //             $query->select('kdExtracurricular')
        //                 ->from(fn($query) =>
        //                         $query->select(DB::raw(" `extracurriculars`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                             ->from('schedules')
        //                             ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                             ->groupBy('extracurriculars.kdExtracurricular')
        //                 )->whereRaw("`date_max` = 'Sat'")->reorder('kdExtracurricular')
        //         )
        //     );
        //     $query->when($filters['Sun'] ?? false, fn($query) =>
        //         $query->whereIn('kdExtracurricular', fn($query) =>
        //             $query->select('kdExtracurricular')
        //                 ->from(fn($query) =>
        //                         $query->select(DB::raw(" `extracurriculars`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                             ->from('schedules')
        //                             ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                             ->groupBy('extracurriculars.kdExtracurricular')
        //                 )->whereRaw("`date_max` = 'Sun'")->reorder('kdExtracurricular')
        //         )
        //     );
        // } elseif((isset($filters['Mon']) && isset($filters['Tue']) && isset($filters['Wed']) && isset($filters['Thu']) && isset($filters['Fri']) && isset($filters['Sat']) && isset($filters['Sun'])) === false){

        // }
    }
}
