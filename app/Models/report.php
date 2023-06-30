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
    // protected $with = ['schedules'];

    public function state(){
        return $this->belongsTo(state::class, 'kdState', 'kdState');
    }

    public function schedules(){
        return $this->belongsTo(schedule::class, 'kdSchedule', 'kdSchedule');
    }

    public function scopeFilter($query, array $filters){
        $query->where(fn($query) =>
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
        ));

        $state = [];
        if(isset($filters['pending']) || isset($filters['accepted']) || isset($filters['denied'])){
            if(isset($filters['pending'])){
                $state[] = 3;
            }
            if(isset($filters['accepted'])){
                $state[] = 4;
            }
            if(isset($filters['denied'])){
                $state[] = 5;
            }
            $query->whereIn('kdstate', $state);
        }

        return $query;
    }
}
