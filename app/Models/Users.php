<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Authenticatable
{

    protected $table = 'Users';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['id','email', 'Password', 'First_Name','Last_Name', 'remember_token'];

    public function setPasswordAttribute($value)
    {
        if( \Hash::needsRehash($value) ) {
            $value = \Hash::make($value);
        }
        $this->attributes['password'] = $value;
    }

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

    public function GetId($email){
        return $id = DB::table('users')->where('email', '=', $email)->pluck('id');
    }

}
