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

    public function tablereturn($localid){
        return $data = DB::table('student')
            ->select('student.Users_id', 'student.email', 'student.First_Name', 'student.Last_name', 'student.Promotion', 'student.Representative')
            ->join('users', 'users.id', '=', 'student.Users_id')
            ->where('student.Localisation_id', '=' , $localid)
            ->get();
    }
}
