<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inform_Step3;
use App\Models\Inform_Step4;
use App\Models\Inform_Step5;
use App\Models\Inform_Step6;

class InformController extends Controller 
{
    protected $step3;
    protected $step4;
    protected $step5;
    protected $step6;

    function __controller(){
        $this->step3 = new Inform_Step3;
        $this->step3 = new Inform_Step4;
        $this->step3 = new Inform_Step5;
        $this->step3 = new Inform_Step6;
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

    public function Create3(Requests $requests){
        $this->step3->Pilot_id = $requests->Pilot_id;                           //Comment le récupérer?
        $this->step3->Student_id = VerifPage($requests);
        $this->step3->Validation_Sheet = $requests->Validation_Sheet;
    }

    public function Create4(Requests $requests){
        $this->step3->Pilot_id = VerifPage($requests);
        $this->step3->Administrator_id = $requests->Administrator_id;           //Comment le récupérer?
        $this->step3->Validation_Sheet = $requests->Validation_Sheet;
    }

    public function Create5(Requests $requests){
        $this->step3->Pilot_id = $requests->Pilot_id;                           //Comment le récupérer?
        $this->step3->Administrator_id = VerifPage($requests);
        $this->step3->Student_id = $requests->Student_id;                       //Comment le récupérer?
        $this->step3->Internship_Contract = $requests->Internship_Contract;
    }

    public function Create6(Requests $requests){
        $this->step3->Pilot_id = $requests->Pilot_id;                           //Comment le récupérer?
        $this->step3->Administrator_id = $requests->Administrator_id;           //Comment le récupérer?
        $this->step3->Student_id = VerifPage($requests);
        $this->step3->Internship_Contract = $requests->Internship_Contract;
    }
}