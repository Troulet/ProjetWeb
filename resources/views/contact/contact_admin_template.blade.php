@extends('contact.contact_admin')

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
