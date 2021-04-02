<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Localisation;

class StudentController extends Controller 
{
  protected $user;
  protected $localisation;

  function __construct()
  {
    $this->user = new Student;
    $this->localisation = new Localisation;
  }

  public function GetById($id)
  {
        return $this->user->GetById($id);
  }

  public function Delete($id)
  {

  //We delete the line on User's table, then on the Child table.
    $deleted = new UsersController;
    $deleted->Delete($id);

    $this->user = Users::find($id);
    $this->user->delete();
  }

  public function Create(Request $request, $Users_id, $Localisation_id )
  {
        $this->user->Users_id = $Users_id[0];
        $this->user->Localisation_id = $Localisation_id[0];
        $this->user->Promotion = $request->Promotion;
        $this->user->Representative = $request->Representative;
        $this->user->Representative_Rights = $request->Representative_Rights;
        $this->user->save();
  }

  public function Update(Request $request, $Localisation_id)
  {
        $this->user = Users::find($request->Users_id);
        $this->user->Localisation_id = $Localisation_id[0];
        $this->user->Promotion = $request->Promotion;
        $this->user->Representative = $request->Representative;
        $this->user->Representative_Rights = $request->Representative_Rights;
        $this->user->save();
  }
}

?>
