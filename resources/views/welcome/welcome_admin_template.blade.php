@extends('welcome.welcome')

@section('welcome')
<div id="information_step4" class="informer">
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

@stop
