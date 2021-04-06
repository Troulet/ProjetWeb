@extends('users.User_profile')

@section('users_profile')
        <h5>Profil : </h5>
            <p>
                Information Admin </br>
                Email : {{$dataUser['email']}} </br>
                Prénom : {{$dataUser['First_Name']}} </br>
                Nom : {{$dataUser['Last_name']}} </br>
            </p>
            @if($user_type == 1)
                {!! Form::open(['url' => '/Inform_step4', 'method' => 'post']) !!}
                        <input name='id' type="hidden" value="{{$dataUser['id']}}">
                        <input name='Validation_Sheet' type="file" required>
                        <button type="submit" class="btn">Transmettre une fiche de validation signée</button>
                {!! Form::close() !!}
            @endif
@stop
