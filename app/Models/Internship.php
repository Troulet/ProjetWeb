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

    public static function GetById($id){
        return $intern = DB::table('internship')->whereId($id)->first();
    }

    public static function GetAll(){
        return $interns = DB::table('internship')->get();
    }

    public static function GetId($desc, $skills, $promo){
        return $id = DB::table('internship')->where('Description', '=', $desc)->where('Skills_researched', '=', $skills)->where('Promotion_researched', '=', $promo)->pluck('id');
    }

    public static function GetProfil($id)
    {
        return $data = DB::table('internship')
            ->select('internship.Enterprise_id', 'internship.id', 'internship.Description', 'internship.Skills_Researched', 'internship.Promotion_Researched', 'internship.Internship_Duration', 'internship.Salary', 'Offer_Date', 'internship.Number_Of_Places', 'internship.Contact', 'enterprise.Enterprise_Name', 'localisation.Localisation as Localisation_Name')
            ->join('enterprise', 'enterprise.id', '=', 'internship.Enterprise_id')
            ->join('localisation', 'localisation.id', '=', 'internship.Localisation_id')
            ->where('internship.id', '=', $id)
            ->first();
    }

    public static function GetInternship($entid){
        return $data = DB::table('internship')
            ->select('internship.id', 'internship.Description', 'internship.Skills_Researched', 'internship.Promotion_Researched', 'internship.Number_Of_Places', 'enterprise.Enterprise_Name', 'localisation.Localisation as Localisation_Name', 'internship.Enterprise_id', 'internship.deleted_at')
            ->join('localisation', 'localisation.id', '=', 'internship.Localisation_id')
            ->join('enterprise', 'enterprise.id', '=', 'internship.Enterprise_id')
            ->where('internship.Enterprise_id', '=', $entid)
            ->get();
    }

    public static function tablereturn(){
        return $data = DB::table('internship')
            ->select('internship.id', 'internship.Description', 'internship.Skills_Researched', 'internship.Promotion_Researched', 'internship.Number_Of_Places', 'enterprise.Enterprise_Name', 'localisation.Localisation as Localisation_Name', 'internship.Enterprise_id', 'internship.deleted_at')
            ->join('localisation', 'localisation.id', '=', 'internship.Localisation_id')
            ->join('enterprise', 'enterprise.id', '=', 'internship.Enterprise_id')
            ->get();
    }

    public static function tablereturnsearch($search){
        return $data = DB::table('internship')
            ->select('internship.id', 'internship.Description', 'internship.Skills_Researched', 'internship.Promotion_Researched', 'internship.Number_Of_Places', 'enterprise.Enterprise_Name', 'localisation.Localisation as Localisation_Name', 'internship.deleted_at')
            ->join('enterprise', 'enterprise.id', '=', 'internship.Enterprise_id')
            ->join('localisation', 'localisation.id', '=', 'internship.Localisation_id')
            ->where('internship.Description', 'like', '%' . $search . '%')
            ->orwhere('internship.Skills_researched', 'like', '%' . $search . '%')
            ->orwhere('internship.Promotion_Researched', 'like', '%' . $search . '%')
            ->orwhere('enterprise.Enterprise_Name', 'like', '%' . $search . '%')
            ->orwhere('localisation.Localisation', 'like', '%' . $search . '%')
            ->get();
    }
}
