<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model 
{

    protected $table = 'Users';
    public $timestamps = true;

    public function Student()
    {
        return $this->hasMany('Student');
    }

    public function Pilot()
    {
        return $this->hasMany('Pilot');
    }

    public function Administrator()
    {
        return $this->hasMany('Administrator');
    }

    public function GetById($id){
        return $user = DB::table('users')->whereId($id)->first();
    }

    public function GetAll(){
        return $users = DB::table('users')->get();
    }

    public function GetId($mail){
        return $id = DB::table('users')->where('Mail', '=', $mail)->pluck('id');
    }
}
