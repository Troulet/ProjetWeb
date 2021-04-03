@extends('internship.internship_profile')

@section('profile_offer')
    
    <h5 class="card-title">Offre</h5>
    <p class="card-text">
        Nom de l\'entreprise : : {{$Enterprise_Name}}
        Description : {{$Description}} </br>
        Compétences recherchées : {{$Skills_researched}} </br>
        Promotion ciblée : {{$Promotion_researched}} </br>
        Durée du stage : {{$Internship_Duration}} </br>
        Gratification : {{$Salary}} </br>
        Date de l\'offre : {{$Offer_Date}} </br>
        Nombre de places : {{$Number_Of_Places}} </br>
        Contact : {{$Contact}} </br>
        Localisation : {{$Localisation_Name}} </br>
    </p>
    <a href="#" class="btn btn-primary">Aller voir</a>
                
            
@stop
