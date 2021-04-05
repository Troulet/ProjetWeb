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

    public function Create3(Requests $requests){
        $this->step3->Pilot_id = $requests->Pilot_id;                           
        $this->step3->Student_id = Auth::id();
        $this->step3->Validation_Sheet = $requests->Validation_Sheet;
        $this->step3->save();
    }

    public function Create4(Requests $requests){
        $this->step4->Pilot_id = Auth::id();
        $this->step4->Administrator_id = $requests->Administrator_id;           
        $this->step4->Validation_Sheet = $requests->Validation_Sheet;
        $this->step4->save();
    }

    public function Create5(Requests $requests){
        $this->step5->Pilot_id = $requests->Pilot_id;                          
        $this->step5->Administrator_id = Auth::id();
        $this->step5->Student_id = $requests->Student_id;                       
        $this->step5->Internship_Contract = $requests->Internship_Contract;
        $this->step5->save();
    }

    public function Create6(Requests $requests){
        $this->step6->Pilot_id = $requests->Pilot_id;                          
        $this->step6->Administrator_id = $requests->Administrator_id;          
        $this->step6->Student_id = Auth::id();
        $this->step6->Internship_Contract = $requests->Internship_Contract;
        $this->step6->save();
    }
}
