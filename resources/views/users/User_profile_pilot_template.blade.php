@extends('users.User_profile')

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
            @if(user_type == 0)
                {!! Form::open(['url' => '/inform_step3', 'method' => 'get']) !!}
                        <input name='id' type="hidden" value="{{$User['id']}}">
                        <input name='Validation_Sheet' type="file" required>
                        <button type="submit" class="btn">Transmettre une fiche de validation signée</button>
                {!! Form::close() !!}
            @endif
    </div>
    @endforeach
@stop
