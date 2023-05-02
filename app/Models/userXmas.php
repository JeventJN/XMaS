<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userXmas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'NIP',
        'program',
        'phoneNumber',
        'password',
        'photo'
    ];

    public function members(){
        return $this->hasMany(Member::class, 'NIP', 'NIP');
    }
}
