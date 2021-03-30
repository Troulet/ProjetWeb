<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;

class AdministratorController extends Controller 
{
  protected $user;

  function __construct()
  {
    $this->user = new Administrator;
  }

  public function GetById($id)
  {
        return $this->user->GetById($id);
  }
}

?>
