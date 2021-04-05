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

    public static function GetAll($id){
        return $steps5 = DB::table('inform_step5')
            ->select('pilot.First_Name as Pilot_First_Name', 'pilot.Last_name as Pilot_Last_Name', 'administrator.First_Name as Administrator_First_Name', 'administrator.Last_name as Administrator_Last_Name')
            ->join('pilot', 'pilot.id', '=', 'inform_step5.Pilot_id')
            ->join('administrator', 'administrator.id', '=', 'inform_step5.Administrator_id')
            ->where('Student', '=', $id)
            ->orderBy('inform_step5.created_at', 'DESC')
            ->get();
    }
}
