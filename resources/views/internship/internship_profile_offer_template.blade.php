@extends('internship.internship_profile')

@section('profile_offer')
            {!! Form::open(['url' => '/Offer', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Offre</button>
            {!! Form::close() !!}

            {!! Form::open(['url' => '/Enterprise_Profil', 'method' => 'post']) !!}
            <input name='id' type="hidden" value="{{$dataOffer['Enterprise_id']}}">
            <button type="submit" class="btn">Voir le Profil de l'Entreprise</button>
            {!! Form::close() !!}

            @if($user_type != 0 && $user_type == 1 || $user_type == 2)
                {!! Form::open(['url' => '/Offer_Delete', 'method' => 'post']) !!}
                            <input name='id' type="hidden" value="{{$Offer['Offer_id']}}">
                            <button type="submit" class="btn">Supprimer</button>
                {!! Form::close() !!}

                {!! Form::open(['url' => '/Offer_Update', 'method' => 'get']) !!}
                            <input name='id' type="hidden" value="{{$Offer['Offer_id']}}">
                            <button type="submit" class="btn">Modifier</button>
                {!! Form::close() !!}
            @endif

    <h5 class="card-title">Offre</h5>
    <p class="card-text">
        Nom de l'entreprise : : {{$dataOffer['Enterprise_Name']}}
        Description : {{$dataOffer['Description']}} </br>
        Compétences recherchées : {{$dataOffer['Skills_Researched']}} </br>
        Promotion ciblée : {{$dataOffer['Promotion_Researched']}} </br>
        Durée du stage : {{$dataOffer['Internship_Duration']}} </br>
        Gratification : {{$dataOffer['Salary']}} </br>
        Date de l'offre : {{$dataOffer['Offer_Date']}} </br>
        Nombre de places : {{$dataOffer['Number_Of_Places']}} </br>
        Contact : {{$dataOffer['Contact']}} </br>
        Localisation : {{$dataOffer['Localisation_Name']}} </br>
    </p>
    <a href="#" class="btn btn-primary">Aller voir</a>    
@stop
