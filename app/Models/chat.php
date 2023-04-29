<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    // protected $fillable = [''];
    protected $guarded = ['kdChat'];

    public function members(){
        return $this->belongsTo(member::class, 'kdMember', 'kdMember');
    }
}
