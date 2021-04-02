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

    public function GetAll(){
        return $scomms = DB::table('student_commentary')->get();
    }

    public function GetId(){
        $studid = $_POST('student_id');
        $entid = $_POST('enterprise_id');

        return $id = DB::table('student_commentary')->where('Student_id', '=', $studid)->where('Enterprise_id', '=', $entid)->pluck('id');
    }

}
