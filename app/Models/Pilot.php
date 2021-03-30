<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pilot extends Model 
{

    protected $table = 'Pilot';
    public $timestamps = true;

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

    public function Create($userid, $mail, $password, $promo, $fname, $lname, $locid){
        DB::table('pilot')->insertOrIgnore([
            'Users_id' => $userid,
            'Mail' => $mail,
            'Password' => $password,
            'Promotion' => $promo,
            'First_Name' => $fname,
            'Last_Name' => $lname,
            'Localisation_id' => $locid,
            'created_at' => date("F j, Y, g:i a")
        ]);
    }

    /*public function Update($userid, $mail, $password, $promo, $fname, $lname, $locid){    
        DB::table('pilot')->updateOrInsert(['Users_id' => $userid],
            [
            'Mail' => $mail,
            'Password' => $password,
            'Promotion' => $promo,
            'First_Name' => $fname,
            'Last_Name' => $lname,
            'Localisation_id' => $locid,
            'updated_at' => date("F j, Y, g:i a")
            ]
        );
    }

    public function delete($id){
        DB::table('pilot')->where('Users_id', '=', $id)->delete();
    }*/

    public function GetById($id){
        return $pilot = DB::table('pilot')->where('Users_id', '=', $id)->first();
    }

    public function GetAll(){
        return $pilots = DB::table('pilot')->get();
    }

    public function GetId($mail){
        return $id = DB::table('pilot')->where('Mail', '=', $mail)->pluck('Users_id');
    }

}
