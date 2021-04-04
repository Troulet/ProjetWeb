@extends('contact.contact_admin')

@section('data_student')
    @foreach ($dataStudent as $user)
    <div class="card-body">
    <p>
        Elève :
        Email : {{$user['email']}}
        Prénom : {{$user['First_Name']}}
        Nom : {{$user['Last_name']}}
        Promotion : {{$user['Promotion']}}

        @if($user['Representative']==true)
            Délégué : oui
        @else
            Délégué : non
        @endif
    </p>
    </div>
    @endforeach
    
@stop

@section('data_pilot')
    @foreach ($dataPilot as $user)
    <div class="card-body">
        <p>
            Information Pilote :
            Email : {{$user['email']}}
            Prénom : {{$user['First_Name']}}
            Nom : {{$user['Last_name']}}
            Promotion : {{$user['Promotion']}}
        </p>
    </div>
    @endforeach
@stop

@section('data_admin')
    @foreach ($dataAdmin as $user)
    <div class="card-body">
        <p>
            Information Admin :
            Email : {{$user['email']}}
            Prénom : {{$user['First_Name']}}
            Nom : {{$user['Last_name']}}
        </p>
    </div>
@stop
