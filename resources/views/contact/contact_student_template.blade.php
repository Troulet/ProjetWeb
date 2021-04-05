@extends('contact.contact_admin')

@section('dataContact')
    @if($dataPilot !== null)
    <div class="card">
        @foreach ($dataPilot as $user)
        <div class="card-body">
            <p>
                Information Pilote :
                Email : {{$user['email']}}
                Prénom : {{$user['First_Name']}}
                Nom : {{$user['Last_name']}}
                Promotion : {{$user['Promotion']}}
            </p>
            {!! Form::open(['url' => '/Users_profil', 'method' => 'get']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Contacter</button>
            {!! Form::close() !!}
        </div>
        @endforeach
    </div><br>
    @endif
@stop

