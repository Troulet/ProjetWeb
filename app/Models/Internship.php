<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Internship extends Model 
{
    use SoftDeletes;
    protected $table = 'Internship';
    public $timestamps = true;

    public function Enterprise()
    {
        return $this->belongsTo('Enterprise');
    }

    public function Postulate()
    {
        return $this->hasMany('Postulate');
    }

    public function GetById(){
        $id = $_POST('id');

        return $intern = DB::table('internship')->whereId($id)->first();
    }

    public function GetAll(){
        return $interns = DB::table('internship')->get();
    }

    public function GetId(){
        $desc = $_POST('description');
        $skills = $_POST('skills');
        $promo = $_POST('promotion');

        return $id = DB::table('internship')->where('Description', '=', $desc)->where('Skills_researched', '=', $skills)->where('Promotion_researched', '=', $promo)->pluck('id');
    }

}
