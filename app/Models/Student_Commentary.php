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

    public function Create(){
        $diff = $_POST('internship_difficulty');
        $lok = $_POST('level_of_knowledge');
        $wenv = $_POST('work_environment');
        $comm = $_POST('commentary');
        $studid = $_POST('student_id');
        $entid = $_POST('enterprise_id');
        
        DB::table('student_commentary')->insertOrIgnore([
            'Internship_Difficulty' => $diff,
            'Level_Of_Knowledge' => $lok,
            'Work_Environment' => $wenv,
            'Commentary' => $comm,
            'Student_id' => $studid,
            'Enterprise_id' => $entid,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $id = $_POST('id');
        $diff = $_POST('internship_difficulty');
        $lok = $_POST('level_of_knowledge');
        $wenv = $_POST('work_environment');
        $tutor = $_POST('tutor_lead');
        $infra = $_POST('infrastructure');
        $access = $_POST('accessibility');
        $comm = $_POST('commentary');
        $studid = $_POST('student_id');
        $entid = $_POST('enterprise_id');
        
        DB::table('student_commentary')->updateOrInsert(['id' => $id],
            [
                'Internship_Difficulty' => $diff,
                'Level_Of_Knowledge' => $lok,
                'Work_Environment' => $wenv,
                'Tutor_Lead' => $tutor,
                'Infrastructure' => $infra,
                'Accessibility' => $access,
                'Commentary' => $comm,
                'Student_id' => $studid,
                'Enterprise_id' => $entid,
                'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $id = $_POST('id');

        DB::table('student_commentary')->where('id', '=', $id)->delete();
    }

    public function GetById(){
        $id = $_POST('id');

        return $scomm = DB::table('student_commentary')->whereId($id)->first();
    }

    public function GetAll(){
        return $scomms = DB::table('student_commentary')->get();
    }

    public function GetId(){
        $studid = $_POST('student_id');
        $entid = $_POST('enterprise_id');

        return $id = DB::table('student_commentary')->where('Student_id', '=', $studid)->where('Enterprise_id', '=', $entid)->pluck('id');
    }

}
