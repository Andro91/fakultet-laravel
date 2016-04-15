<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smer extends Model
{
    protected $table = 'smers';
    protected $fillable = ['naziv'];

    public function students()
    {
        return Smer::hasMany(Student::class);
    }
}
