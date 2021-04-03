@extends('User_profile')

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
    </div>
    @endforeach
@stop
