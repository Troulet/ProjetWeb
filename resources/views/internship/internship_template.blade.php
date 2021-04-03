@extends('internship.internship_student')

@section('carousel_enterprise')
            @foreach($dataOffer as $Offer)
                <h5 class="card-title">Stage chez {{$Offer['Enterprise_Name']}}</h5>
                <p class="card-text">
                {{$Offer['Description']}} </br>
                Compétences recherchées : {{$Offer['Skills_Researched']}} </br>
                Promotion ciblée : {{$Offer['Promotion_Researched']}} </br>
                Nombre de places : {{$Offer['Number_Of_Places']}} </br>
                Localisation : {{$Offer['Localisation_Name']}} </br>
                </p>
                <a href="#" class="btn btn-primary">Aller voir</a>
            @endforeach
            @foreach($dataEnterprise as $Enterprise)
                <h5 class="card-title">Entreprise {{$Enterprise['Enterprise_Name']}}</h5>
                <p class="card-text">
                Travaille dans le secteur : {{$Enterprise['Activity_Sector']}} </br>
                A déjà pris {{$Enterprise['Cesi_Student_Taken']}} élèves. </br>
                Nombre de places : {{$Offer['Number_Of_Places']}} </br>
                Se situe à {{$Enterprise['Localisation_Name']}} ! </br>
                </p>
                <a href="#" class="btn btn-primary">Aller voir</a>
            @endforeach
@stop
