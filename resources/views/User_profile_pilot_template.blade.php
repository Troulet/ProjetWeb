@extends('User_profile')

@section('pilot_profile')
    @foreach($dataUser as $User)
    <div class="card-body">
        <h5>Profil : </h5>
            <p>
                Pilote
                Email : {{$User['email']}}
                Mot de passe : {{$User['password']}}
                Prénom : {{$User['First_Name']}}
                Nom : {{$User['Last_name']}}
                Promotion : {{$User['Promotion']}}
                Localité : {{$User['Localisation_Name']}}
            </p>
    </div>
    @endforeach
@stop
