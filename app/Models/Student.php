<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model 
{

    protected $table = 'Student';
    public $timestamps = true;

    public function Postulate()
    {
        return $this->hasMany('Postulate');
    }

    public function Student_Commentary()
    {
        return $this->hasMany('Student_Commentary');
    }

    public function Inform_Step3()
    {
        return $this->hasMany('Inform_Step3');
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

    public function Create($userid, $mail, $password, $promo, $fname, $lname, $rep, $reprights, $locid){
        DB::table('student')->insertOrIgnore([
            'Users_id' => $userid,
            'Mail' => $mail,
            'Password' => $password,
            'Promotion' => $promo,
            'First_Name' => $fname,
            'Last_Name' => $lname,
            'Representative' => $rep,
            'Representative_Rights' => $reprights,
            'Localisation_id' => $locid,
            'created_at' => date("F j, Y, g:i a")
        ]);
    }

    /*public function Update($userid, $mail, $password, $promo, $fname, $lname, $rep, $reprights, $locid){
        $userid = $_POST('user_id');
        $mail = $_POST('mail');
        $password = $_POST('password');
        $promo = $_POST('promotion');
        $fname = $_POST('first_name');
        $lname = $_POST('last_name');
        $rep = $_POST('representative');
        $reprights = $_POST('representative_rights');
        $locid = $_POST('localisation_id');
        
        DB::table('student')->updateOrInsert(['Users_id' => $userid],
            [
            'Mail' => $mail,
            'Password' => $password,
            'Promotion' => $promo,
            'First_Name' => $fname,
            'Last_Name' => $lname,
            'Representative' => $rep,
            'Representative_Rights' => $reprights,
            'Localisation_id' => $locid,
            'updated_at' => date("F j, Y, g:i a")
            ]
        );
    }

    public function delete($id){
        DB::table('student')->where('Users_id', '=', $id)->delete();
    }*/

    public function GetById($id){
        return $student = DB::table('student')->where('Users_id', '=', $id)->first();
    }

    public function GetAll(){
        return $students = DB::table('student')->get();
    }

    public function GetId($mail){
        return $id = DB::table('student')->where('Mail', '=', $mail)->pluck('Users_id');
    }

}
