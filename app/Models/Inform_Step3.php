<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function GetById(){
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');

        return $step3 = DB::table('inform_step3')->where('Pilot_id', '=', $pilotid)->where('Student_id', '=', $studid)->first();
    }

    public function GetAll(){
        return $steps3 = DB::table('inform_step3')->get();
    }
}
