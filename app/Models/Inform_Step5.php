<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function GetById(){
        $adminid = $_POST('administrator_id');
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');

        return $step5 = DB::table('inform_step5')->where('Pilot_id', '=', $pilotid)->where('Student_id', '=', $studid)->where('Administrator_id', '=', $adminid)->first();
    }

    public function GetAll(){
        return $steps5 = DB::table('inform_step5')->get();
    }
}
