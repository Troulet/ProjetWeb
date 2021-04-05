@extends('users.User_profile')

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
            {!! Form::open(['url' => '/inform_step3', 'method' => 'get']) !!}
                        <input name='id' type="hidden" value="{{$User['id']}}">
                        <input name='Internship_Contract' type="file" required>
                        <button type="submit" class="btn">Transmettre une Convention non signée par l'entreprise</button>
            {!! Form::close() !!}
            {!! Form::open(['url' => '/inform_step3', 'method' => 'get']) !!}
                  <input name='id' type="hidden" value="{{$User['id']}}">
                  <input name='Internship_Contract' type="file" required>
                  <button type="submit" class="btn">Transmettre une Convention signée par l'entreprise</button>
            {!! Form::close() !!}

    </div>
    @endforeach
@stop


