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

    public function GetAll(){
        return $interns = DB::table('internship')->get();
    }

    public function GetId($desc, $skills, $promo){
        return $id = DB::table('internship')->where('Description', '=', $desc)->where('Skills_researched', '=', $skills)->where('Promotion_researched', '=', $promo)->pluck('id');
    }

    public function tablereturn(){
        return $data = DB::table('internship')
            ->select('internship.id, internship.Description, internship.Skills_Researched, internship.Promotion_Researched, internship.Number_Of_Places, enterprise.Enterprise_Name, localisation.Localisation_Name')
            ->join('enterprise', 'enterprise.id', '=', 'internship.Enterprise_id')
            ->join('localisation', 'localisation.id', '=', 'internship.Localisation_id')
            ->get();
    }
}
