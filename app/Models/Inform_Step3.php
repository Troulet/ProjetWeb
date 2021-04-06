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

    public static function GetAll($id){
        return $steps5 = DB::table('inform_step3')
            ->select('Student.First_Name as Student_First_Name', 'Student.Last_name as Student_Last_name')
            ->join('users as Student', 'Student.id', '=', 'inform_step3.Student_id')
            ->where('inform_step3.Pilot_id', '=', $id)
            ->orderBy('inform_step3.created_at', 'DESC')
            ->get();
    }
}
