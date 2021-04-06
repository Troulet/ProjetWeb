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
       
       
    @if($dataAdmin !== null)
    <div class="card">
        @foreach ($dataAdmin as $user)
        <div class="card-body">
            <p>
                Information Admin :
                Email : {{$user['email']}}
                Prénom : {{$user['First_Name']}}
                Nom : {{$user['Last_name']}}
            </p>
            {!! Form::open(['url' => '/Users_Profil', 'method' => 'get']) !!}
                    <input name='id' type="hidden" value="{{$user['Users_id']}}">
                    <button type="submit" class="btn">Contacter</button>
            {!! Form::close() !!}
        </div>
        @endforeach
    <div><br>
    @endif

@stop

@section('Notif')
<div class="notif">
            <div class="list-group">
                <h3>Messagerie</h3>
                @if($dataInform3 != null)
                    @foreach($dataInform3 as $Inform)
                        <a href="#" class="list-group-item list-group-item-action">
                            <h5>Inform_step5</h5>  
                            {{$Inform['Student_First_Name']}} {{$Inform['Student_Last_name']}} vous as transmis une Fiche de Validation signée par l'Entreprise.
                        </a>
                    @endforeach
                @endif
                @if($dataInform5 != null)
                    @foreach($dataInform5 as $Inform)
                        <a href="#" class="list-group-item list-group-item-action">
                            <h5>Inform_step5</h5>  
                            {{$Inform['First_Name']}} {{$Inform['Last_name']}} as transmis une Convention de Stage de l'Entreprise de {{$Inform['Student_First_Name']}} {{$Inform['Student_Last_name']}}.
                        </a>
                    @endforeach
                @endif
                @if($dataInform6 != null)
                    @foreach($dataInform6 as $Inform)
                        <a href="#" class="list-group-item list-group-item-action">
                            <h5>Inform_step6</h5>  
                            {{$Inform['First_Name']}} {{$Inform['Last_name']}} as reçu une Convention de Stage signée de l'Entreprise de {{$Inform['Student_First_Name']}} {{$Inform['Student_Last_name']}}.
                        </a>
                    @endforeach
                @endif
            </div>
</div>

@stop
