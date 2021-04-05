<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Postulate extends Model 
{

	protected $table = 'Postulate';
	public $timestamps = true;

	public function Internship()
	{
		return $this->belongsTo('Internship');
	}

	public function Student()
	{
		return $this->belongsTo('Student');
	}

	public function GetById(){
		$internid = $_POST('internship_id');
		$studid = $_POST('studend_id');

		return $post = DB::table('postulate')->whereId($internid)->whereId($studid)->first();
	}

	public function GetAll(){
		return $posts = DB::table('postulate')->get();
	}

	public static function GetPostulate($id){
		return $user = DB::table('postulate')
			->select('postulate.Curiculum_Vitae', 'postulate.Motivation_Letter', 'postulate.Response_State', 'enterprise.Enterprise_Name', 'internship.id')
			->join('internship', 'internship.id', '=', 'postulate.Internship_id')
			->join('enterprise', 'enterprise.id', '=', 'internship.Enterprise_id')
			->where('postulate.Student_id', '=', $id)
            ->get();

	}
}
