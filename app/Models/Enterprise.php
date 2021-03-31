<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enterprise extends Model 
{
    use SoftDeletes;
    protected $table = 'Enterprise';
    public $timestamps = true;

    public function Internship()
    {
        return $this->hasMany('Internship');
    }

    public function Student_Commentary()
    {
        return $this->hasOne('Student_Commentary');
    }

    public function Pilot_Commentary()
    {
        return $this->hasOne('Pilot_Commentary');
    }

    public function GetById($id){
        return $firm = DB::table('enterprise')->whereId($id)->first();
    }

    public function GetAll(){
        return $firms = DB::table('enterprise')->get();
    }

    public function GetId($ename){
        return $id = DB::table('enterprise')->where('Enterprise_Name', '=', $ename)->pluck('id');
    }

}
