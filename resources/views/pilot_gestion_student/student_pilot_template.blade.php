@extends('pilot_gestion_student.student_pilot')

@section('data_student')
    @foreach ($dataStudent as $user)
        
        <div class="card-body">
            <p>
                Elève :
                Email : {{$user['email']}}
                Prénom : {{$user['First_Name']}}
                Nom : {{$user['Last_name']}}
                Promotion : {{$user['Promotion']}}

                @if($user['Representative']==true)
                Délégué : oui
                @else
                Délégué : non
                @endif
            </p>
        </div>
        <div>
            <button type="button" id="btn_Supp" class="btn">SUPPRIMER</button>
            <button type="button" id="btn_Modify" class="btn">MODIFIER</button>
        </div>
    @endforeach
@stop
