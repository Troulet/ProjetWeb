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
            ->select('Admin.First_Name', 'Admin.Last_name', 'Student.First_Name as Student_First_Name', 'Student.Last_name as Student_Last_name')
            ->join('users as Admin', 'Admin.id', '=', 'inform_step5.Administrator_id')
            ->join('users as Student', 'Student.id', '=', 'inform_step5.Student_id')
            ->where('inform_step5.Student_id', '=', $id)
            ->orwhere('inform_step5.Pilot_id', '=', $id)
            ->orderBy('inform_step5.created_at', 'DESC')
            ->get();
    }
}
