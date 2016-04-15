<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Smer;

class Student extends Model
{
    //
    protected $fillable = ['ime','prezime','brojindeksa','jmbg','smers_id'];

    public function smer()
    {
        return $this->belongsTo(Smer::class,'smers_id');
    }
}
