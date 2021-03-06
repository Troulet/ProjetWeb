<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Inform_Step3;
use App\Models\Inform_Step4;
use App\Models\Inform_Step5;
use App\Models\Inform_Step6;
use App\Models\Student;

class InformController extends Controller 
{
    protected $step3;
    protected $step4;
    protected $step5;
    protected $step6;

    function __construct(){
        $this->step3 = new Inform_Step3;
        $this->step4 = new Inform_Step4;
        $this->step5 = new Inform_Step5;
        $this->step6 = new Inform_Step6;
    }

    public function Create3(Request $request){
        $this->step3->Pilot_id = $request->id;                           
        $this->step3->Student_id = Auth::id();
        $this->step3->Validation_Sheet = $request->Validation_Sheet;
        $this->step3->save();
        UsersController::GetHomePage();
    }

    public function Create4(Request $request){
        $this->step4->Pilot_id = Auth::id();
        $this->step4->Administrator_id = $request->id;           
        $this->step4->Validation_Sheet = $request->Validation_Sheet;
        $this->step4->save();
        UsersController::GetHomePage();
    }

    public function Create5(Request $request){
        $pilot = ObjectController::objtoArray(Student::GetPilot($request->id));
        $this->step5->Pilot_id = $pilot[0];                          
        $this->step5->Administrator_id = Auth::id();
        $this->step5->Student_id = $request->id;                       
        $this->step5->Internship_Contract = $request->Internship_Contract;
        $this->step5->save();
        UsersController::GetHomePage();
    }

    public static function GetInform3($id)
    {
        return ObjectController::objtoArray(Inform_Step3::GetAll($id));
    }

    public static function GetInform4($id)
    {
        return ObjectController::objtoArray(Inform_Step4::GetAll($id));
    }

    public static function GetInform5($id)
    {
        return ObjectController::objtoArray(Inform_Step5::GetAll($id));
    }

    public static function GetInform6($id)
    {
        return ObjectController::objtoArray(Inform_Step6::GetAll($id));
    }

    public function Create6(Request $request){
        $pilot = ObjectController::objtoArray(Student::GetPilot($request->id));
        $this->step6->Pilot_id = $pilot[0];                            
        $this->step6->Administrator_id = Auth::id();          
        $this->step6->Student_id = $request->id;
        $this->step6->Internship_Contract = $request->Internship_Contract;
        $this->step6->save();
        UsersController::GetHomePage();
    }
}
