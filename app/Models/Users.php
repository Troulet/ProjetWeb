<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model 
{

    protected $table = 'Users';
    public $timestamps = true;

    public function Student()
    {
        return $this->hasMany('Student');
    }

    public function Pilot()
    {
        return $this->hasMany('Pilot');
    }

    public function Administrator()
    {
        return $this->hasMany('Administrator');
    }

}