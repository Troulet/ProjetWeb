<?php

namespace App\Models;  

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model 
{

    protected $table = 'Administrator';
    public $timestamps = true;

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

    public function Users()
    {
        return $this->belongsTo('Users');
    }

    public function Create(){
        $userid = $_POST('user_id');
        $mail = $_POST('mail');
        $password = $_POST('password');
        $fname = $_POST('first_name');
        $lname = $_POST('last_name');
        $locid = $_POST('localisation_id');

        DB::table('administrator')->insertOrIgnore([
            'Users_id' => $userid,
            'Mail' => $mail,
            'Password' => $password,
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
        $fname = $_POST('first_name');
        $lname = $_POST('last_name');
        $locid = $_POST('localisation_id');
        
        DB::table('administrator')->updateOrInsert(['Users_id' => $userid],
            [
            'Mail' => $mail,
            'Password' => $password,
            'First_Name' => $fname,
            'Last_Name' => $lname,
            'Localisation_id' => $locid,
            'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $id = $_POST('user_id');

        DB::table('administrator')->where('Users_id', '=', $id)->delete();
    }

    public function GetById(){
        $id = $_POST('user_id');

        return $admin = DB::table('administrator')->where('Users_id', '=', $id)->first();
    }

    public function GetAll(){
        return $admins = DB::table('administrator')->get();
    }

    public function GetId(){
        $mail = $_POST('mail');

        return $id = DB::table('administrator')->where('Mail', '=', $mail)->pluck('Users_id');
    }
}