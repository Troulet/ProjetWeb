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

    public function Create(){
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');
        $validsheet = $_POST('validation_sheet');
        
        DB::table('inform_step3')->insertOrIgnore([
            'Pilot_id' => $pilotid,
            'Student_id' => $studid,
            'Validation_Sheet' => $validsheet,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');
        $validsheet = $_POST('validation_sheet');
        
        DB::table('inform_step3')->updateOrInsert(['Pilot_id' => $pilotid, 'Student_id' => $studid],
            [
                'Validation_Sheet' => $validsheet,
                'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');

        DB::table('inform_step3')->where('Pilot_id', '=', $pilotid)->where('Student_id', '=', $studid)->delete();
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
