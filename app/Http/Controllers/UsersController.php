<?php 

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller 
{
  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    
  }

  public function Get_Table($mail)
  {
      $table = [$student, $pilot, $administrator];
      for ($i=0; isset($table[$i]); $i++)
      {
        if( $table[$i]->GetId($mail) !== null)
        {
            return $table[$i];
        }
      }
      return 'student';
      //Ajouter une route d'erreur
  }

  public function __construct()
  {
      $student = new StudentController
      $pilot = new PilotController
      $administrator = new Administrator
  }
  
}

?>
