<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Postulate extends Model 
{

    protected $table = 'Postulate';
    public $timestamps = true;

    public function Internship()
    {
        return $this->belongsTo('Internship');
    }

    public function Student()
    {
        return $this->belongsTo('Student');
    }

    public function Create(){
        $internid = $_POST('internship_id');
        $studid = $_POST('studend_id');
        $cv = $_POST('cv');
        $ml = $_POST('ml');
        $response = $_POST('response_state');
        $appdate = $_POST('application_date');
        $mailcont = $_POST('mail_content');
        
        DB::table('postulate')->insertOrIgnore([
            'Internship_id' => $internid,
            'Student_id' => $studid,
            'Curiculum_Vitae' => $cv,
            'Motivation_Letter' => $ml,
            'Response_State' => $response,
            'Application_Date' => $appdate,
            'Mail_Content' => $mailcont,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $internid = $_POST('internship_id');
        $studid = $_POST('studend_id');
        $cv = $_POST('cv');
        $ml = $_POST('ml');
        $response = $_POST('response_state');
        $appdate = $_POST('application_date');
        $mailcont = $_POST('mail_content');
        
        DB::table('postulate')->updateOrInsert(['Internship_id' => $internid, 'Student_id' => $studid],
            [
                'Curiculum_Vitae' => $cv,
                'Motivation_Letter' => $ml,
                'Response_State' => $response,
                'Application_Date' => $appdate,
                'Mail_Content' => $mailcont,
                'created_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $internid = $_POST('internship_id');
        $studid = $_POST('studend_id');

        DB::table('postulate')->where('Internship_id', '=', $internid)->where('Student_id', '=', $studid)->delete();
    }

    public function GetById(){
        $internid = $_POST('internship_id');
        $studid = $_POST('studend_id');

        return $post = DB::table('postulate')->whereId($internid)->whereId($studid)->first();
    }

    public function GetAll(){
        return $posts = DB::table('postulate')->get();
    }
}
