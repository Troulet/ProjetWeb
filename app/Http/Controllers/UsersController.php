<?php 

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller 
{

  protected $user;
  protected $student;
  protected $administrator;
  protected $pilot;

  public function GetId($Login)
  {
    return $this->user->GetId($Login);
  }

  public function Get_Table($id)
  {
      $table = [$this->student, $this->pilot, $this->administrator];
      for ($i=0; isset($table[$i]); $i++)
      {
        try
        {
            $table[$i]->GetById($id);
            return $i;
        }
        catch(Exception $e)
        {
        }
      }
      return 'error';
  }

  function __construct()
  {
      $this->user = new Users;
      $this->student = new StudentController;
      $this->pilot = new PilotController;
      $this->administrator = new AdministratorController;
  }
  
}

?>
