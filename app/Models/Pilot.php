<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pilot extends Model 
{

    protected $table = 'Pilot';
    public $timestamps = true;
    protected $primaryKey = 'Users_id';

    public function Users()
    {
        return $this->belongsTo('Users');
    }

    public function Pilot_Commentary()
    {
        return $this->hasMany('Pilot_Commentary');
    }

    public function Inform_Step3()
    {
        return $this->hasMany('Inform_Step3');
    }

    public function Inform_Step4()
    {
        return $this->hasMany('Inform_Step4');
    }

    public function Inform_Step5()
    {
        return $this->hasMany('Inform_Step5');
    }

    public function Inform_Step6()
    {
        return $this->hasMany('Inform_Step6');
    }

    public function GetById($id){
        return $pilot = DB::table('pilot')->where('Users_id', '=', $id)->first();
    }

    public static function GetAll(){
        return $pilots = DB::table('pilot')->get();
    }

    public function GetPromo($id){
        return $promo = DB::table('pilot')->where('Users_id', '=', $id)->pluck('Promotion');
    }

    public function tablereturn($localid){
        return $data = DB::table('pilot')
            ->select('pilot.Users_id', 'users.email', 'users.First_Name', 'users.Last_name', 'pilot.Promotion')
            ->join('users', 'users.id', '=', 'pilot.Users_id')
            ->where('pilot.Localisation_id', '=' , $localid)
            ->get();
    }

    public static function tablereturnsearch($search, $localid){
        return $data = DB::table('pilot')
            ->select('pilot.Users_id', 'users.email', 'users.First_Name', 'users.Last_name', 'pilot.Promotion')
            ->join('users', 'users.id', '=', 'pilot.Users_id')
            ->where('pilot.Localisation_id', '=' , $localid)
             ->where('users.First_Name', 'like', '%' . $search . '%')
            ->orwhere('users.Last_name', 'like', '%' . $search . '%')
            ->orwhere('pilot.Promotion', 'like', '%' . $search . '%')
            ->get();
    }

    public static function GetforUpdate($id){
        return $data = DB::table('pilot')
            ->select('pilot.Users_id', 'users.email', 'users.password', 'users.First_Name', 'users.Last_name', 'pilot.Promotion', 'localisation.Localisation as Localisation_Name')
            ->join('users', 'users.id', '=', 'pilot.Users_id')
            ->join('localisation', 'localisation.id', '=', 'pilot.Localisation_id')
            ->where('pilot.Users_id', '=' , $id)
            ->first();
    }

    public static function TableReturnContact($localid){
        return $data = DB::table('pilot')
            ->select('Users_id', 'First_Name', 'Last_name')
            ->where('Localisation_id', '=', $localid)
            ->get();
    }

    public static function GetProfile($id){
        return $data = DB::table('pilot')
            ->select('users.id', 'users.email', 'users.First_Name', 'users.Last_name', 'pilot.Promotion')
            ->join('users', 'users.id', '=', 'pilot.Users_id')
            ->where('pilot.Users_id', '=' , $id)
            ->first();
    }

}
