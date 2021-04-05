@extends('users.User_profile')

@section('users_profile')
        <h5>Profil : </h5>
            <p>
                Pilote
                Email : {{$dataUser['email']}}
                Prénom : {{$dataUser['First_Name']}}
                Nom : {{$dataUser['Last_name']}}
                Promotion : {{$dataUser['Promotion']}}
            </p>
            @if($user_type == 0)
                {!! Form::open(['url' => '/inform_step3', 'method' => 'get']) !!}
                        <input name='id' type="hidden" value="{{$dataUser['id']}}">
                        <input name='Validation_Sheet' type="file" required>
                        <button type="submit" class="btn">Transmettre une fiche de validation signée</button>
                {!! Form::close() !!}
            @endif
@stop
