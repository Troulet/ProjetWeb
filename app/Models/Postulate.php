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

    public function GetById(){
        $internid = $_POST('internship_id');
        $studid = $_POST('studend_id');

        return $post = DB::table('postulate')->whereId($internid)->whereId($studid)->first();
    }

    public function GetAll(){
        return $posts = DB::table('postulate')->get();
    }
}
