@extends('template')

@section('data_pilot')
    @foreach ($dataPilot as $user)

    <div class="card-body">
        <p>
            Information Pilote :
            Email : {{$user['email']}}
            Prénom : {{$user['First_Name']}}
            Nom : {{$user['Last_Name']}}
            Promotion : {{$user['Promotion']}}
        </p>
    </div>
    <div>
        <button type="button" id="btn_Supp" class="btn">SUPPRIMER</button>
        <button type="button" id="btn_Modify" class="btn">MODIFIER</button>
    </div>

    @endforeach
@stop

@section('data_student')
    @foreach ($dataStudent as $user)
        
        <div class="card-body">
            <p>
                Elève :
                Email : {{$user['email']}}
                Prénom : {{$user['First_Name']}}
                Nom : {{$user['Last_Name']}}
                Promotion : {{$user['Promotion']}}

                @if($user['Representative']==true) {
                    Délégué : oui
                } @else {
                    Délégué : non
                }
                @endif
            </p>
        </div>
        <div>
            <button type="button" id="btn_Supp" class="btn">SUPPRIMER</button>
            <button type="button" id="btn_Modify" class="btn">MODIFIER</button>
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
            Nom : {{$user['Last_Name']}}
        </p>
    </div>
    <div>
        <button type="button" id="btn_Supp" class="btn">SUPPRIMER</button>
        <button type="button" id="btn_Modify" class="btn">MODIFIER</button>
    </div>

    @endforeach
@stop
