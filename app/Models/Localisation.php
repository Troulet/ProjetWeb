<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model 
{

    protected $table = 'Localisation';
    public $timestamps = true;

    public function Internship()
    {
        return $this->hasMany('Internship');
    }

    public function Administrator()
    {
        return $this->hasMany('Administrator');
    }

    public function Student()
    {
        return $this->hasMany('Localisation');
    }

    public function Pilot()
    {
        return $this->hasMany('Pilot');
    }

}