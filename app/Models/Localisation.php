<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Localisation extends Model 
{

    protected $table = 'Localisation';
    public $timestamps = true;
    protected $fillable = ['id','Localisation'];

    public function Internship()
    {
        return $this->hasMany('Internship');
    }

    public function Administrator()
    {
        return $this->hasMany('Administrator');
    }

    public function Student()
    {
        return $this->hasMany('Localisation');
    }

    public function Pilot()
    {
        return $this->hasMany('Pilot');
    }

    public function GetById(){
        $id = $_POST('id');

        return $place = DB::table('localisation')->whereId($id)->first();
    }

    public function GetAll(){
        return $places = DB::table('localisation')->get();
    }

    public function GetId($localisation){
        return $id = DB::table('localisation')->where('Localisation', '=', $localisation)->pluck('id');
    }

}
