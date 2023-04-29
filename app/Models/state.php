<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;

    // protected $fillable = [''];
    protected $guarded = ['kdState'];

    public function members(){
        return $this->hasMany(member::class, 'kdState', 'kdState');
    }

    public function reports(){
        return $this->hasMany(report::class, 'kdState', 'kdState');
    }
}
