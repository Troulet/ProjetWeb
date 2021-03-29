<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model 
{

    protected $table = 'Administrator';
    public $timestamps = true;

    public function Inform_Step4()
    {
        return $this->hasMany('Inform_Step4');
    }

    public function Inform_Step5()
    {
        return $this->hasMany('Inform_Step5');
    }

    public function Inform_Step6()
    {
        return $this->hasMany('Inform_Step6');
    }

    public function Users()
    {
        return $this->belongsTo('Users');
    }

}