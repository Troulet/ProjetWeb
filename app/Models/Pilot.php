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

    public function GetAll(){
        return $pilots = DB::table('pilot')->get();
    }

    public function tablreturn($localid){
        return $data = DB::table('pilot')
            ->select('pilot.id, pilot.Mail, pilot.First_Name, pilot.Last_name, pilot.Promotion')
            ->where('pilot.Localisation_id', '=' , $localid)
            ->get();
    }
}
