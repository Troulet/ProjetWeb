<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function GetById(){
        $pilotid = $_POST('pilot_id');
        $adminid = $_POST('administrator_id');

        return $step4 = DB::table('inform_step4')->where('Pilot_id', '=', $pilotid)->where('Administrator_id', '=', $adminid)->first();
    }

    public static function GetAll($id){
        return $steps5 = DB::table('inform_step4')
            ->select('Pilot.First_Name as Pilot_First_Name', 'Pilot.Last_name as Pilot_Last_name')
            ->join('users as Pilot', 'Pilot.id', '=', 'inform_step4.Pilot_id')
            ->where('inform_step4.Administrator_id', '=', $id)
            ->orderBy('inform_step4.created_at', 'DESC')
            ->get();
    }
}
