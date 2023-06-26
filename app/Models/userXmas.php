<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userXmas extends Model
{
    use HasFactory;
    protected $table = 'user_xmas';
    protected $primaryKey = 'NIP';
    protected $fillable = [
        'name',
        'NIP',
        'program',
        'phoneNumber',
        'password',
        'photo'
    ];

    // protected $with=[
    //     'members'
    // ];

    public function getKeyType()
    {
        return 'string';
    }

    public function members(){
        return $this->hasMany(Member::class, 'NIP', 'NIP');
    }
}
