<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Administrator extends Model 
{
    
    protected $table = 'Administrator';
    public $timestamps = true;
    protected $fillable = ['Users_id','Localisation_id'];

    public function Inform_Step4()
    {
        return $this->hasMany('Inform_Step4');
    }

    public function Inform_Step5()
    {
        return $this->hasMany('Inform_Step5');
    }

    public function Inform_Step6()
    {
        return $this->hasMany('Inform_Step6');
    }

    public function Users()
    {
        return $this->belongsTo('Users');
    }

    public function GetById($id){
        return $admin = DB::table('administrator')->where('Users_id', '=', $id)->get();
    }

    public function GetAll(){
        return $admins = DB::table('administrator')->get();
    }

}
