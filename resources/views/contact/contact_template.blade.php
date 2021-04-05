@extends('contact.contact_admin')
@extends('contact.contact_pilot')
@extends('contact.contact_student')

@section('data_student')
    @if($dataStudent !== null)
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
                {!! Form::open(['url' => '/Contact', 'method' => 'get']) !!}
                        <input name='id' type="hidden" value="{{$user['Users_id']}}">
                        <button type="submit" class="btn">Contacter</button>
                {!! Form::close() !!}
        </div>
        @endforeach
    @endif
    
@stop

@section('data_pilot')
    @if($dataPilot !== null)
        @foreach ($dataPilot as $user)
        <div class="card-body">
            <p>
                Information Pilote :
                Email : {{$user['email']}}
                Prénom : {{$user['First_Name']}}
                Nom : {{$user['Last_name']}}
                Promotion : {{$user['Promotion']}}
            </p>
            {!! Form::open(['url' => '/Contact', 'method' => 'get']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Contacter</button>
            {!! Form::close() !!}
        </div>
        @endforeach
    @endif
@stop

@section('data_admin')
    @if($dataAdmin !== null)
        @foreach ($dataAdmin as $user)
        <div class="card-body">
            <p>
                Information Admin :
                Email : {{$user['email']}}
                Prénom : {{$user['First_Name']}}
                Nom : {{$user['Last_name']}}
            </p>
            {!! Form::open(['url' => '/Contact', 'method' => 'get']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Contacter</button>
            {!! Form::close() !!}
        </div>
        @endforeach
    @endif
@stop
