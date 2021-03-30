<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Enterprise extends Model 
{

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

    public function Create(){
        $ename = $_POST('enterprise_name');
        $actsect = $_POST('activity_sector');
        $cesistudtaken = $_POST('cesi_student_taken');
        
        DB::table('enterprise')->insertOrIgnore([
            'Enterprise_Name' => $ename,
            'Activity_Sector' => $actsect,
            'Cesi_Student_Taken' => $cesistudtaken,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $id = $_POST('id');
        $ename = $_POST('enterprise_name');
        $actsect = $_POST('activity_sector');
        $cesistudtaken = $_POST('cesi_student_taken');
        
        DB::table('enterprise')->updateOrInsert(['id' => $id],
            [
                'Enterprise_Name' => $ename,
                'Activity_Sector' => $actsect,
                'Cesi_Student_Taken' => $cesistudtaken,
                'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $id = $_POST('id');

        DB::table('enterprise')->where('id', '=', $id)->delete();
    }

    public function GetById(){
        $id = $_POST('id');

        return $firm = DB::table('enterprise')->whereId($id)->first();
    }

    public function GetAll(){
        return $firms = DB::table('enterprise')->get();
    }

    public function GetId(){
        $ename = $_POST('enterprise_name');

        return $id = DB::table('enterprise')->where('Enterprise_Name', '=', $ename)->pluck('id');
    }

}
