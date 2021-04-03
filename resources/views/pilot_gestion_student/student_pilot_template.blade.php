@extends('pilot_gestion_student.student_pilot')

@section('data_student')

    <div class="card-body">
        <p>
        Elève :
        Email : {{$email}}
        Prénom : {{$First_Name}}
        Nom : {{$Last_Name}}
        Promotion : {{$Promotion}}
        Délégué : ? {{$Representative}}
        </p>
    </div>
    <div>
        <button type="button" id="btn_Supp" class="btn">SUPPRIMER</button>
        <button type="button" id="btn_Modify" class="btn">MODIFIER</button>
    </div>
@stop
