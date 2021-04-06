@extends('contact.contact_admin')

@section('dataContact')
    @if($dataStudent !== null)
    <div class="card">
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
                {!! Form::open(['url' => '/Users_Profil', 'method' => 'get']) !!}
                        <input name='id' type="hidden" value="{{$user['Users_id']}}">
                        <button type="submit" class="btn">Contacter</button>
                {!! Form::close() !!}
        </div>
        @endforeach
    </div><br>
    @endif
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
                @if($dataInform4 != null)
                    @foreach($dataInform4 as $Inform)
                    <a href="#" class="list-group-item list-group-item-action">
                        <h5>Inform_step4</h5>  
                        {{$Inform['Pilot_First_Name']}} {{$Inform['Pilot_Last_name']}} vous as transmis une fiche de Validation de Sujet de Stage signée.
                    </a>
                    @endforeach
                @endif
            </div>
</div>
@stop
