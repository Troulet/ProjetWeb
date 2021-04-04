@extends('users.student_pilot')

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
    @endforeach
    @endif
@stop
