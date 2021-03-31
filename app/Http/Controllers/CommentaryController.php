<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilot_Commentary;
use App\Models\Student_Commentary;
use App\Models\Enterprise;

class CommentaryController extends Controller 
{
    protected $CommentPilot;
    protected $CommentStudent;
    
    function __construct(){
        $this->CommentPilot = new Pilot_Commentary;
        $this->CommentStudent = new Student_Commentary;
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

    public function GetCommentPage(Request $request)
  {
     $User_id = $this->VerifPage($request);
     switch ($this->Get_Table($User_id))
     {
        case 0 :
            return View::make('commentary_student')->with('user_type', 0);
            break;

        case 1 :
            return View::make('commentary_pilot')->with('user_type', 1);
            break;

     }

  }

    public function Create(Request $request){
        $User_id = $this->VerifPage($request);
        switch ($this->Get_Table($User_id))
        {
            case 0 :
                CreateStudent($request);
                break;

            case 1 :
                CreatePilot($request);
                break;
   
        }
    }
    
    public function CreatePilot(Request $request){
        $this->CommentPilot->Internship_Difficulty = $request->Internship_Difficulty;
        $this->CommentPilot->Level_Of_Knowledge = $request->Level_Of_Knowledge;
        $this->CommentPilot->Work_Environment = $request->Work_Environment;
        $this->CommentPilot->Commentary = $request->Commentary;
        $this->CommentPilot->Pilot_id = $request->Pilot_id;
        $this->CommentPilot->Enterprise_id = $request->Enterprise_id;
    }

    public function CreateStudent(Request $request){
        $this->CommentStudent->Internship_Difficulty = $request->Internship_Difficulty;
        $this->CommentStudent->Level_Of_Knowledge = $request->Level_Of_Knowledge;
        $this->CommentStudent->Work_Environment = $request->Work_Environment;
        $this->CommentStudent->Tutor_Lead = $request->Tutor_Lead;
        $this->CommentStudent->Infrastructure = $request->Infrastructure;
        $this->CommentStudent->Accessibility = $request->Accessibility;
        $this->CommentStudent->Commentary = $request->Commentary;
        $this->CommentStudent->Student_id = $request->Student_id;
        $this->CommentStudent->Enterprise_id = $request->Enterprise_id;
    }
}