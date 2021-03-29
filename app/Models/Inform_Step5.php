<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inform_Step5 extends Model 
{

    protected $table = 'Inform_Step5';
    public $timestamps = true;

    public function Pilot()
    {
        return $this->belongsTo('Pilot');
    }

    public function Student()
    {
        return $this->belongsTo('Student');
    }

    public function Administrator()
    {
        return $this->belongsTo('Administrator');
    }

}