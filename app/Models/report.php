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
            $query->where('title', 'like', '%' . $search . '%')
                ->orwhereHas('schedules', fn($query) =>
                    $query->whereHas('xtras', fn($query) =>
                                $query->where('name', 'like', '%' . $search . '%')
                ))
                ->orwhereHas('schedules', fn($query) =>
                    $query->whereHas('xtras', fn($query) =>
                        $query->whereHas('leader', fn($query) =>
                            $query->whereHas('userXmas', fn($query) =>
                                $query->where('name', 'like', '%' . $search . '%')
                ))))
                ->orwhereHas('schedules', fn($query) =>
                    $query->Where(DB::raw("DATE_FORMAT(`schedules`.`date`, '%d')"), 'like', '%'.$search.'%')
                        ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`date`, '%M')"), 'like', '%'.$search.'%')
                        ->orWhere(DB::raw("DATE_FORMAT(`schedules`.`date`, '%Y')"), 'like', '%'.$search.'%')
                )
        );

        // $query->when($filters['asc'] ?? false, fn($query) =>
        //     $query->whereHas('schedules', fn($query) =>
        //             $query->orderBy(`schedules`.`date`)
        // ));

        // if((isset($filters['Physique']) && isset($filters['NonPhysique'])) === false){
        //     $query->when($filters['Physique'] ?? false, fn($query) =>
        //         $query->where('category', 'like', 'Physique')
        //     );

        //     $query->when($filters['NonPhysique'] ?? false, fn($query) =>
        //         $query->where('category', 'like', 'Non-Physique')
        //     );
        // }

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
        // $day = [];
        // if((isset($filters['asc']))){
        //     $query->whereIn(DB::raw('`reports`.kdSchedule'), fn($query) =>
        //         $query->select('kdSchedule')
        //             ->from(fn($query) =>
        //                     $query->select(DB::raw(" `schedules`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                         ->from('schedules')
        //                         // ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                         ->groupBy('schedules.kdExtracurricular')
        //             )->whereIn('date_max', $day)->reorder('kdExtracurricular')
        //     );
        //     $query->when($filters['asc'] ?? false, fn($query) =>
        //         $query->where('category', 'like', 'asc')
        //     );

        //     $query->when($filters['NonPhysique'] ?? false, fn($query) =>
        //         $query->where('category', 'like', 'Non-Physique')
        //     );
        // }
        // if((isset($filters['asc']) || isset($filters['desc']))){
        //     if(isset($filters['asc']) === true){
        //         $day[] = ['asc'];
        //     }
        //     if(isset($filters['desc']) === true){
        //         $day[] = ['desc'];
        //     }
        //     if(isset($filters['Wed']) === true){
        //         $day[] = ['Wed'];
        //     }
        //     if(isset($filters['Thu']) === true){
        //         $day[] = ['Thu'];
        //     }
        //     if(isset($filters['Fri']) === true){
        //         $day[] = ['Fri'];
        //     }
        //     if(isset($filters['Sat']) === true){
        //         $day[] = ['Sat'];
        //     }
        //     if(isset($filters['Sun']) === true){
        //         $day[] = ['Sun'];
        //     }
        //     $query->whereIn(DB::raw('`extracurriculars`.kdExtracurricular'), fn($query) =>
        //         $query->select('kdExtracurricular')
        //             ->from(fn($query) =>
        //                     $query->select(DB::raw(" `schedules`.kdextracurricular, DATE_FORMAT(MAX(schedules.date), '%a') AS date_max"))
        //                         ->from('schedules')
        //                         // ->JOIN('extracurriculars', 'extracurriculars.kdExtracurricular', '=', 'schedules.kdExtracurricular')
        //                         ->groupBy('schedules.kdExtracurricular')
        //             )->whereIn('date_max', $day)->reorder('kdExtracurricular')
        //     );
        // }

        return $query;
    }
}
