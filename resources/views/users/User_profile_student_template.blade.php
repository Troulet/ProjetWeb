@extends('users.User_profile')

@section('users_profile')

        <h5>Profil : </h5>
            <p>
                Elève
                Email : {{$dataUser['email']}}
                Prénom : {{$dataUser['First_Name']}}
                Nom : {{$dataUser['Last_name']}}
                Promotion : {{$dataUser['Promotion']}}

                @if($dataUser['Representative']==true)
                Délégué : oui
                Droits du délégué : {{$dataUser['Representative_Rights']}}
                @else
                Délégué : non
                @endif

                Nombre de candidatures : {{$PostulateCount}}
            </p>
            @if($user_type == 2)
            {!! Form::open(['url' => '/Inform_step5', 'method' => 'post']) !!}
                        <input name='id' type="hidden" value="{{$dataUser['id']}}">
                        <input name='Internship_Contract' type="file" required>
                        <button type="submit" class="btn">Transmettre une Convention non signée par l'entreprise</button>
            {!! Form::close() !!}
            {!! Form::open(['url' => '/Inform_step6', 'method' => 'post']) !!}
                  <input name='id' type="hidden" value="{{$dataUser['id']}}">
                  <input name='Internship_Contract' type="file" required>
                  <button type="submit" class="btn">Transmettre une Convention signée par l'entreprise</button>
            {!! Form::close() !!}
            @endif

@stop


