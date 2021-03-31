<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inform_Step6 extends Model 
{

    protected $table = 'Inform_Step6';
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

    public function Create(){
        $adminid = $_POST('administrator_id');
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');
        $interncontract = $_POST('internship_contract');
        
        DB::table('inform_step6')->insertOrIgnore([
            'Administrator_id' => $adminid,
            'Pilot_id' => $pilotid,
            'Student_id' => $studid,
            'Internship_Contract' => $interncontract,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $adminid = $_POST('administrator_id');
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');
        $interncontract = $_POST('internship_contract');
        
        DB::table('inform_step6')->updateOrInsert(['Pilot_id' => $pilotid, 'Student_id' => $studid, 'Administrator_id' => $adminid],
            [
                'Internship_Contract' => $interncontract,
                'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $adminid = $_POST('administrator_id');
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');

        DB::table('inform_step6')->where('Pilot_id', '=', $pilotid)->where('Student_id', '=', $studid)->where('Administrator_id', '=', $adminid)->delete();
    }

    public function GetById(){
        $adminid = $_POST('administrator_id');
        $pilotid = $_POST('pilot_id');
        $studid = $_POST('studient_id');

        return $step6 = DB::table('inform_step6')->where('Pilot_id', '=', $pilotid)->where('Student_id', '=', $studid)->where('Administrator_id', '=', $adminid)->first();
    }

    public function GetAll(){
        return $steps6 = DB::table('inform_step6')->get();
    }
}
