<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function GetById(){
        $id = $_POST('id');

        return $pcomm = DB::table('pilot_commentary')->whereId($id)->first();
    }

    public static function GetAll(){
        return $pcomms = DB::table('pilot_commentary')->get();
    }

    public static function GetId(){
        $pilotid = $_POST('pilot_id');
        $entid = $_POST('enterprise_id');

        return $id = DB::table('pilot_commentary')->where('Pilot_id', '=', $pilotid)->where('Enterprise_id', '=', $entid)->pluck('id');
    }

    public static function tablereturn($entid){
        return $data = DB::table('pilot_commentary')
            ->select('users.First_Name', 'users.Last_name', 'pilot_commentary.Internship_Difficulty', 'pilot_commentary.Level_Of_Knowledge', 'pilot_commentary.Work_Environment', 'pilot_commentary.Commentary')
            ->join('users', 'users.id', '=', 'pilot_commentary.Pilot_id')
            ->where('pilot_commentary.Enterprise_id', '=', $entid)
            ->get();
    }
}
