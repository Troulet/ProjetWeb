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

    public function Create(){
        $pilotid = $_POST('pilot_id');
        $adminid = $_POST('administrator_id');
        $validsheet = $_POST('validation_sheet');
        
        DB::table('inform_step4')->insertOrIgnore([
            'Pilot_id' => $pilotid,
            'Administrator_id' => $adminid,
            'Validation_Sheet' => $validsheet,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $pilotid = $_POST('pilot_id');
        $adminid = $_POST('administrator_id');
        $validsheet = $_POST('validation_sheet');
        
        DB::table('inform_step4')->updateOrInsert(['Pilot_id' => $pilotid, 'Administrator_id' => $adminid],
            [
                'Validation_Sheet' => $validsheet,
                'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $pilotid = $_POST('pilot_id');
        $adminid = $_POST('administrator_id');

        DB::table('inform_step4')->where('Pilot_id', '=', $pilotid)->where('Administrator_id', '=', $adminid)->delete();
    }

    public function GetById(){
        $pilotid = $_POST('pilot_id');
        $adminid = $_POST('administrator_id');

        return $step4 = DB::table('inform_step4')->where('Pilot_id', '=', $pilotid)->where('Administrator_id', '=', $adminid)->first();
    }

    public function GetAll(){
        return $steps4 = DB::table('inform_step4')->get();
    }
}
