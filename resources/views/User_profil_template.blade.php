@extends('profil')

@section('student_profil')
    <div class="card-body">
            <p>
                Elève :
                Id : {{$user['Users_id']}}
                Email : {{$user['email']}}
                Mot de passe : {{$user['password']}}
                Prénom : {{$user['First_Name']}}
                Nom : {{$user['Last_name']}}
                Promotion : {{$user['Promotion']}}
                Localité : {{$user['Localisation_Name']}}

                @if($user['Representative']==true)
                Délégué : oui
                Droits du délégué : {{$user['Representative_Rights']}}
                @else
                Délégué : non
                @endif
            </p>
    </div>
@endsection

@section('pilot_profil')
<div class="card-body">
            <p>
                Pilote :
                Id : {{$user['Users_id']}}
                Email : {{$user['email']}}
                Mot de passe : {{$user['password']}}
                Prénom : {{$user['First_Name']}}
                Nom : {{$user['Last_name']}}
                Promotion : {{$user['Promotion']}}
                Localité : {{$user['Localisation_Name']}}
            </p>
    </div>
@endsection

@section
<div class="card-body">
    <p>
        Information Admin :
        Email : {{$user['email']}}
        Prénom : {{$user['First_Name']}}
        Nom : {{$user['Last_name']}}
    </p>
</div>
@endsection
