@extends('users.User_profile')

@section('admin_profile')
    @foreach($dataUser as $User)
    <div class="card-body">
        <h5>Profil : </h5>
            <p>
                Information Admin
                Email : {{$User['email']}}
                Prénom : {{$User['First_Name']}}
                Nom : {{$User['Last_name']}}
            </p>
            @if(user_type == 1)
                {!! Form::open(['url' => '/Users_profil', 'method' => 'get']) !!}
                        <input name='id' type="hidden" value="{{$User['id']}}">
                        <input name='Validation_Sheet' type="file" required>
                        <button type="submit" class="btn">Transmettre une fiche de validation signée</button>
                {!! Form::close() !!}
            @endif
    </div>
    @endforeach
@stop
