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

    public function Create(){
        $diff = $_POST('internship_difficulty');
        $lok = $_POST('level_of_knowledge');
        $wenv = $_POST('work_environment');
        $comm = $_POST('commentary');
        $pilotid = $_POST('pilot_id');
        $entid = $_POST('enterprise_id');
        
        DB::table('pilot_commentary')->insertOrIgnore([
            'Internship_Difficulty' => $diff,
            'Level_Of_Knowledge' => $lok,
            'Work_Environment' => $wenv,
            'Commentary' => $comm,
            'Pilot_id' => $pilotid,
            'Enterprise_id' => $entid,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $id = $_POST('id');
        $diff = $_POST('internship_difficulty');
        $lok = $_POST('level_of_knowledge');
        $wenv = $_POST('work_environment');
        $comm = $_POST('commentary');
        $pilotid = $_POST('pilot_id');
        $entid = $_POST('enterprise_id');
        
        DB::table('pilot_commentary')->updateOrInsert(['id' => $id],
            [
                'Internship_Difficulty' => $diff,
                'Level_Of_Knowledge' => $lok,
                'Work_Environment' => $wenv,
                'Commentary' => $comm,
                'Pilot_id' => $pilotid,
                'Enterprise_id' => $entid,
                'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $id = $_POST('id');

        DB::table('pilot_commentary')->where('id', '=', $id)->delete();
    }

    public function GetById(){
        $id = $_POST('id');

        return $pcomm = DB::table('pilot_commentary')->whereId($id)->first();
    }

    public function GetAll(){
        return $pcomms = DB::table('pilot_commentary')->get();
    }

    public function GetId(){
        $pilotid = $_POST('pilot_id');
        $entid = $_POST('enterprise_id');

        return $id = DB::table('pilot_commentary')->where('Pilot_id', '=', $pilotid)->where('Enterprise_id', '=', $entid)->pluck('id');
    }
}