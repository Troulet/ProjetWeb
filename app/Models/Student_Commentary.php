<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student_Commentary extends Model 
{

    protected $table = 'Student_Commentary';
    public $timestamps = true;

    public function Enterprise()
    {
        return $this->belongsTo('Enterprise');
    }

    public function Student()
    {
        return $this->belongsTo('Student');
    }

    public function GetById(){
        $id = $_POST('id');

        return $scomm = DB::table('student_commentary')->whereId($id)->first();
    }

    public static function GetAll(){
        return $scomms = DB::table('student_commentary')->get();
    }

    public static function GetId(){
        $studid = $_POST('student_id');
        $entid = $_POST('enterprise_id');

        return $id = DB::table('student_commentary')->where('Student_id', '=', $studid)->where('Enterprise_id', '=', $entid)->pluck('id');
    }

    public static function tablereturn($entid){
        return $data = DB::table('student_commentary')
            ->select('users.First_Name', 'users.Last_name', 'student_commentary.Internship_Difficulty', 'student_commentary.Level_Of_Knowledge', 'student_commentary.Work_Environment', 'student_commentary.Tutor_Lead', 'student_commentary.Infrastructure', 'student_commentary.Accessibility', 'student_commentary.Commentary')
            ->join('users', 'users.id', '=', 'student_commentary.Student_id')
            ->where('student_commentary.Enterprise_id', '=', $entid)
            ->get();
    }
}
