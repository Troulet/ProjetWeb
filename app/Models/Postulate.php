<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulate extends Model 
{

    protected $table = 'Postulate';
    public $timestamps = true;

    public function Internship()
    {
        return $this->belongsTo('Internship');
    }

    public function Student()
    {
        return $this->belongsTo('Student');
    }

}