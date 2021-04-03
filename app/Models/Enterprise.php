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

    public static function GetById($id){
        return $firm = DB::table('enterprise')->whereId($id)->first();
    }

    public static function GetAll(){
        return $firms = DB::table('enterprise')->get();
    }

    public static function GetId($ename){
        return $id = DB::table('enterprise')->where('Enterprise_Name', '=', $ename)->pluck('id');
    }

    public static function tablereturn(){
        return $data = DB::table('enterprise')
            ->select('enterprise.id', 'enterprise.Enterprise_Name', 'enterprise.Activity_Sector', 'enterprise.Cesi_Student_Taken', 'Localisation.Localisation as Localisation_Name')
            ->join('localisation', 'localisation.id', '=', 'enterprise.Localisation_id')
            ->get();
    }

    public static function tablereturnsearch($search){
        return $data = DB::table('enterprise')
            ->select('enterprise.id', 'enterprise.Enterprise_Name', 'enterprise.Activity_Sector', 'enterprise.Cesi_Student_Taken', 'Localisation.Localisation as Localisation_Name')
            ->join('localisation', 'localisation.id', '=', 'enterprise.Localisation_id')
            ->where('enterprise.Enterprise_Name', 'like', '%' . $search . '%')
            ->orwhere('enterprise.Activity_Sector', 'like', '%' . $search . '%')
            ->orwhere('enterprise.Cesi_Student_Taken', 'like', '%' . $search . '%')
            ->orwhere('localisation.Localisation', 'like', '%' . $search . '%')
            ->get();
    }

    public static function GetProfil($id){
        return $data = DB::table('enterprise')
            ->select('enterprise.id', 'enterprise.Enterprise_Name', 'enterprise.Activity_Sector', 'enterprise.Cesi_Student_Taken', 'Localisation.Localisation as Localisation_Name')
            ->join('localisation', 'localisation.id', '=', 'enterprise.Localisation_id')
            ->where('enterprise.id', '=', $id)
            ->first();
    }

}
