@extends('template')

@section('data_student')

    <div class="card-body">
        <p>
        Elève : {{$email}}
        {{$First_Name}}
        {{$Last_Name}}
        {{$Promotion}}
        {{$Representative}}
        </p>
    </div>
    <div>
        <button type="button" class="btn">SUPPRIMER</button>
        <button type="button" class="btn">MODIFIER</button>
    </div>
@stop

@section('data_pilot')
    <div class="card-body">
        <p>
        Pilote : {{$email}}
        {{$First_Name}}
        {{$Last_Name}}
        {{$Promotion}}
    </div>
    <div>
        <button type="button" class="btn">SUPPRIMER</button>
        <button type="button" class="btn">MODIFIER</button>
    </div>
