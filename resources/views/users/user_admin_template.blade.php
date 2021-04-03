@extends('users.user_admin')

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
    </div>
    <div>
        <button type="button" id="btn_Supp" class="btn">SUPPRIMER</button>
        <button type="button" id="btn_Modify" class="btn">MODIFIER</button>
    </div>

    @endforeach
    @endif
@stop


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
            <button type="button" id="btn_Supp" class="btn">SUPPRIMER</button>
            <button type="button" id="btn_Modify" class="btn">MODIFIER</button>
        </div>
    @endforeach
    @endif
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
    <div>
        <button type="button" id="btn_Supp" class="btn">SUPPRIMER</button>
        <button type="button" id="btn_Modify" class="btn">MODIFIER</button>
    </div>

    @endforeach
@stop
