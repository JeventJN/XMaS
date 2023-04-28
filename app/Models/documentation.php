<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentation extends Model
{
    use HasFactory;

    // protected $fillable = [''];
    protected $guarded = ['kdDocumentation'];

    public function xtras(){
        return $this->belongsTo(extracurricular::class, 'kdExtracurricular');
    }
}
