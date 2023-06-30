<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentation extends Model
{
    use HasFactory;

    // protected $fillable = [''];
    protected $primaryKey = 'kdDocumentation';
    protected $guarded = ['kdDocumentation'];
    // protected $with = ['xtras'];

    public function xtras(){
        return $this->belongsTo(extracurricular::class, 'kdExtracurricular', 'kdExtracurricular');
    }
}
