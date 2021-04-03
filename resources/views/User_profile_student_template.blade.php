@extends('User_profile')

@section('student_profile')
    @foreach($dataUser as $User)
    <div class="card-body">
        <h5>Profil : </h5>
            <p>
                Elève
                Email : {{$User['email']}}
                Mot de passe : {{$User['password']}}
                Prénom : {{$User['First_Name']}}
                Nom : {{$User['Last_name']}}
                Promotion : {{$User['Promotion']}}
                Localité : {{$User['Localisation_Name']}}

                @if($User['Representative']==true)
                Délégué : oui
                Droits du délégué : {{$User['Representative_Rights']}}
                @else
                Délégué : non
                @endif
            </p>
    </div>
    @endforeach
@stop


