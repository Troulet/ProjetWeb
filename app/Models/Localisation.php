<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model 
{

    protected $table = 'Localisation';
    public $timestamps = true;

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

    public function Create(){
        $localisation = $_POST('localisation');
        
        DB::table('localisation')->insertOrIgnore([
            'Localisation' => $localisation,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $id = $_POST('id');
        $localisation = $_POST('localisation');
        
        DB::table('localisation')->updateOrInsert(['id' => $id],
            [
                'Localisation' => $localisation,
                'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $id = $_POST('id');

        DB::table('localisation')->where('id', '=', $id)->delete();
    }

    public function GetById(){
        $id = $_POST('id');

        return $place = DB::table('localisation')->whereId($id)->first();
    }

    public function GetAll(){
        return $places = DB::table('localisation')->get();
    }

    public function GetId(){
        $localisation = $_POST('localisation');

        return $id = DB::table('localisation')->where('Localisation', '=', $localisation)->pluck('id');
    }

}