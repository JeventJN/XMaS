<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    // protected $fillable = [''];
    protected $guarded = ['kdMember'];
    protected $primaryKey = 'kdMember';
    // protected $with=[
    //     'userXmas'
    // ];

    public function userXmas(){
        return $this->belongsTo(userXmas::class, 'NIP', 'NIP');
    }

    public function state(){
        return $this->belongsTo(state::class, 'kdState', 'kdState');
    }

    public function xtras(){
        return $this->belongsTo(extracurricular::class, 'kdExtracurricular', 'kdExtracurricular');
    }
    public function chats(){
        return $this->hasMany(Chat::class, 'kdMember', 'kdMember');
    }

    public function presences(){
        return $this->hasMany(presence::class, 'kdMember', 'kdMember');
    }
}
