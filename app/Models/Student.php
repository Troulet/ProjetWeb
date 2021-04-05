<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model 
{

    protected $table = 'Student';
    public $timestamps = true;
    protected $primaryKey = 'Users_id';

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

    public function GetById($id){
        return $student = DB::table('student')->where('Users_id', '=', $id)->first();
    }

    public function GetAll(){
        return $students = DB::table('student')->get();
    }

    public function GetPromo($id){
        return $promo = DB::table('student')->where('Users_id', '=', $id)->pluck('Promotion');
    }

    public function tablereturn($localid){
        return $data = DB::table('student')
            ->select('student.Users_id', 'users.email', 'users.First_Name', 'users.Last_name', 'student.Promotion', 'student.Representative')
            ->join('users', 'users.id', '=', 'student.Users_id')
            ->where('student.Localisation_id', '=' , $localid)
            ->get();
    }

    public static function tablereturnsearch($search, $localid){
        return $data = DB::table('student')
            ->select('student.Users_id', 'users.email', 'users.First_Name', 'users.Last_name', 'student.Promotion', 'student.Representative')
            ->join('users', 'users.id', '=', 'student.Users_id')
            ->where('student.Localisation_id', '=' , $localid)
            ->where('users.First_Name', 'like', '%' . $search . '%')
            ->orwhere('users.Last_name', 'like', '%' . $search . '%')
            ->orwhere('student.Promotion', 'like', '%' . $search . '%')
            ->get();
    }

    public static function GetforUpdate($id){
        return $data = DB::table('student')
            ->select('student.Users_id', 'users.email', 'users.password', 'users.First_Name', 'users.Last_name', 'student.Promotion', 'student.Representative', 'student.Representative_Rights', 'localisation.Localisation as Localisation_Name')
            ->join('users', 'users.id', '=', 'student.Users_id')
            ->join('localisation', 'localisation.id', '=', 'student.Localisation_id')
            ->where('student.Users_id', '=' , $id)
            ->first();
    }

    public static function TableReturnContact($localid){
        return $data = DB::table('student')
            ->select('Users_id', 'First_Name', 'Last_name')
            ->where('Localisation_id', '=', $localid)
            ->where('Representative', '=', true)
            ->get();
    }

    public static function GetPilot($id)
    {
        return $pilotid = DB::table('student')
            ->join('pilot', 'pilot.Promotion', '=', 'student.Promotion')
            ->where('student.Users_id', '=', $id)
            ->pluck('pilot.Users_id');
    }

    public static function GetProfile($id)
    {
        return $pilotid = DB::table('student')
            ->select('users.id', 'users.email', 'users.First_Name', 'users.Last_name', 'student.Promotion', 'student.Representative', 'student.Representative_Rights')
            ->join('users', 'users.id', '=', 'student.Users_id')
            ->where('student.Users_id', '=', $id)
            ->first();
    }

    public static function CountPostulate($id){
        return $count = DB::table('postulate')
            ->where('Student_id', '=', $id)
            ->get()
            ->count();
    }

        
}
