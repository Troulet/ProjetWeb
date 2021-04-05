@extends('users.user_admin')

@section('data_pilot')
    @if($dataPilot !== null)
    @foreach ($dataPilot as $user)
    <div class="pilot">
    <div class="card-body">
        <p>
            Information Pilote :
            Email : {{$user['email']}}
            Prénom : {{$user['First_Name']}}
            Nom : {{$user['Last_name']}}
            Promotion : {{$user['Promotion']}}
        </p>
    </div>
    <div>
            {!! Form::open(['url' => '/Users_Delete', 'method' => 'post']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Supprimer</button>
            {!! Form::close() !!}
            {!! Form::open(['url' => '/Users_Update', 'method' => 'get']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Modifier</button>
            {!! Form::close() !!}
    </div>
    </div>
    @endforeach
    @endif
@stop


@section('data_student')
    @if($dataStudent !== null)
    @foreach ($dataStudent as $user)
        @if($user['Representative'] == true)
        <div class="representative">
        @else
        <div class="student">
        @endif
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
        <div>
            {!! Form::open(['url' => '/Users_Delete', 'method' => 'post']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Supprimer</button>
            {!! Form::close() !!}
            {!! Form::open(['url' => '/Users_Update', 'method' => 'get']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Modifier</button>
            {!! Form::close() !!}
        </div>
        </div>
    @endforeach
    @endif
@stop

@section('data_admin')
    @if($dataAdmin !== null)
    @foreach ($dataAdmin as $user)
    <div class="admin">
    <div class="card-body">
        <p>
            Information Admin :
            Email : {{$user['email']}}
            Prénom : {{$user['First_Name']}}
            Nom : {{$user['Last_name']}}
        </p>
    </div>
    <div>
        {!! Form::open(['url' => '/Users_Delete', 'method' => 'post']) !!}
                <input name='id' type="hidden" value="{{$user['Users_id']}}">
                <button type="submit" class="btn">Supprimer</button>
        {!! Form::close() !!}
        {!! Form::open(['url' => '/Users_Update', 'method' => 'get']) !!}
                <input name='id' type="hidden" value="{{$user['Users_id']}}">
                <button type="submit" class="btn">Modifier</button>
        {!! Form::close() !!}
    </div>
    </div>

    @endforeach
    @endif
@stop
