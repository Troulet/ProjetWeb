<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulate;

class PostulateController extends Controller 
{
    protected $postulate;

    function __construct()
    {
        $this->postulate = new Postulate;
    }

    public function VerifPage(Request $request)
    {
        if ($request->session()->get('Login') !== null)
        {
            return $this->GetId($request->session()->get('Login'));
        }
        else
	    {
        echo "Error";
        }
    }

    public function Create(Requests $requests){
        $this->postulate->Internship_id = $requests->Internship_id;
        $this->postulate->Student_id = VerifPage($requests);
        $this->postulate->Curiculum_Vitae = $requests->Curiculum_Vitae;
        $this->postulate->Motivation_Letter = $requests->Motivation_Letter;
        $this->postulate->Response_State = 0;
        $this->postulate->Mail_Content = $requests->Mail_Content;
    }

    public function Update(Requests $requests){
        $this->postulate->Internship_id = Postulate::find($request->Internship_id);
        $this->postulate->Student_id = Postulate::find($request->Internship_id);
        $this->postulate->Response_State = $requests->Response_State;
    }
}