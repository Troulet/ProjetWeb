<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inform_Step3 extends Model 
{

    protected $table = 'Inform_Step3';
    public $timestamps = true;

    public function Student()
    {
        return $this->belongsTo('Student');
    }

    public function Pilot()
    {
        return $this->belongsTo('Pilot');
    }

}