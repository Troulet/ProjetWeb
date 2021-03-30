<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    public function Create(){
        $userid = $_POST('user_id');
        $mail = $_POST('mail');
        $password = $_POST('password');
        $promo = $_POST('promotion');
        $fname = $_POST('first_name');
        $lname = $_POST('last_name');
        $locid = $_POST('localisation_id');

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

    public function Update(){
        $userid = $_POST('user_id');
        $mail = $_POST('mail');
        $password = $_POST('password');
        $promo = $_POST('promotion');
        $fname = $_POST('first_name');
        $lname = $_POST('last_name');
        $locid = $_POST('localisation_id');
        
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

    public function delete(){
        $id = $_POST('users_id');

        DB::table('pilot')->where('Users_id', '=', $id)->delete();
    }

    public function GetById(){
        $id = $_POST('users_id');

        return $pilot = DB::table('pilot')->where('Users_id', '=', $id)->first();
    }

    public function GetAll(){
        return $pilots = DB::table('pilot')->get();
    }

    public function GetId(){
        $mail = $_POST('mail');

        return $id = DB::table('pilot')->where('Mail', '=', $mail)->pluck('Users_id');
    }

}