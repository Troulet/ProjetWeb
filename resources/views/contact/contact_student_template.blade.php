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
            {!! Form::open(['url' => '/Users_Profil', 'method' => 'get']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Contacter</button>
            {!! Form::close() !!}
        </div>
        @endforeach
    </div><br>
    @endif
@stop

@section('Notif')
<div class="notif">
            <div class="list-group">
                <h3>Messagerie</h3>
                @if($dataInform5 != null)
                @foreach($dataInform5 as $Inform)
                <a href="#" class="list-group-item list-group-item-action"><h5>{{$Inform['Administrator_First_Name']</h5>Message</a>
                @endforeach
                @endif
            </div>
        </div>

@stop
