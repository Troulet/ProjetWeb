<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pilot_Commentary extends Model 
{

    protected $table = 'Pilot_Commentary';
    public $timestamps = true;

    public function Pilot()
    {
        return $this->belongsTo('Pilot');
    }

    public function Enterprise()
    {
        return $this->belongsTo('Enterprise');
    }

}