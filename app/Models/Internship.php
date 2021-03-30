<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Internship extends Model 
{

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

    public function Create(){
        $desc = $_POST('description');
        $skills = $_POST('skills');
        $promo = $_POST('promotion');
        $duration = $_POST('duration');
        $salary = $_POST('salary');
        $date = $_POST('date');
        $nop = $_POST('nb_of_places');
        $contact = $_POST('contact');
        $entid = $_POST('enterprise_id');
        $locid = $_POST('localisation_id');
        
        DB::table('internship')->insertOrIgnore([
            'Description' => $desc,
            'Skills_researched' => $skills,
            'Promotion_researched' => $promo,
            'Internship_Duration' => $duration,
            'Salary' => $salary,
            'Offer_date' => $date,
            'Number_Of_Places' => $nop,
            'Contact' => $contact,
            'Enterprise_id' => $entid,
            'Localisation_id' => $locid,
            'created_at' => date("F j, Y, g:i a")
        ]);
        
    }

    public function Update(){
        $desc = $_POST('description');
        $skills = $_POST('skills');
        $promo = $_POST('promotion');
        $duration = $_POST('duration');
        $salary = $_POST('salary');
        $date = $_POST('date');
        $nop = $_POST('nb_of_places');
        $contact = $_POST('contact');
        $entid = $_POST('enterprise_id');
        $locid = $_POST('localisation_id');
        
        DB::table('internship')->updateOrInsert(['id' => $id],
            [
                'Description' => $desc,
                'Skills_researched' => $skills,
                'Promotion_researched' => $promo,
                'Internship_Duration' => $duration,
                'Salary' => $salary,
                'Offer_date' => $date,
                'Number_Of_Places' => $nop,
                'Contact' => $contact,
                'Enterprise_id' => $entid,
                'Localisation_id' => $locid,
                'updated_at' => date("F j, Y, g:i a")
            ]
        );

    }

    public function delete(){
        $id = $_POST('id');

        DB::table('internship')->where('id', '=', $id)->delete();
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
