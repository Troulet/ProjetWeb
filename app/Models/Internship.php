<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model 
{

    protected $table = 'Internship';
    public $timestamps = true;

    public function Enterprise()
    {
        return $this->belongsTo('Enterprise');
    }

    public function Postulate()
    {
        return $this->hasMany('Postulate');
    }

}