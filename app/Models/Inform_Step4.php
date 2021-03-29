<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inform_Step4 extends Model 
{

    protected $table = 'Inform_Step4';
    public $timestamps = true;

    public function Pilot()
    {
        return $this->belongsTo('Pilot');
    }

    public function Administrator()
    {
        return $this->belongsTo('Administrator');
    }

}