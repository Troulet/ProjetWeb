@extends('profil')

@section('student_profil')
    <div class="card-body">
        <h5> Elève :</h5>
            <p>
                Email : {{$email}}
                Mot de passe : {{$password}}
                Prénom : {{$First_Name}}
                Nom : {{$Last_name}}
                Promotion : {{$Promotion}}
                Localité : {{$Localisation_Name}}

                @if($Representative==true)
                Délégué : oui
                Droits du délégué : {{$Representative_Rights}}
                @else
                Délégué : non
                @endif
            </p>
    </div>
@stop

@section('')
@stop
