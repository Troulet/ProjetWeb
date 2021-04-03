@extends('internship.internship_profile')

@section('profile_enterprise')
    <h5 class="card-title">Offre</h5>
    <p class="card-text">
        Nom de l\'entreprise : {{$Enterprise_Name}}
        Secteur d\'activité : {{$Activity_Sector}}
        Etudiants CESI déjà pris : {{$Cesi_Student_Taken}}
        Localisation : {{$Localisation_Name}} </br>
    </p>
    <a href="#" class="btn btn-primary">Aller voir</a>

    @foreach($dataOffer as $Offer)
        <h5 class="card-title">Stage proposé(s)</h5>
        <p class="card-text">
            {{$Offer['Description']}} </br>
            Compétences recherchées : {{$Offer['Skills_Researched']}} </br>
            Promotion ciblée : {{$Offer['Promotion_Researched']}} </br>
            Nombre de places : {{$Offer['Number_Of_Places']}} </br>
            Localisation : {{$Offer['Localisation_Name']}} </br>
        </p>
        <a href="#" class="btn btn-primary">Aller voir</a>
    @endforeach

    @foreach($dataCommentStudent as $Comment)
        <h5 class="card-title">Commentaires des étudiants</h5>
        <p class="card-text">
            Prénom : {{$Comment['First_Name']}} </br>
            Nom : {{$Comment['Last_Name']}} </br>
            Difficulté du stage : {{$Comment['Internship_Difficulty']}} </br>
            Niveau d'apprentissage : {{$Comment['Level_Of_Knowledge']}} </br>
            Environnement de travail : {{$Comment['Work_Environment']}} </br>
            Accompagnement tuteur : {{$Comment['Tutor_Lead']}} </br>
            Infrastructure : {{$Comment['Infrastructure']}} </br>
            Accessibilité : {{$Comment['Accessibility']}} </br>
        </p>
    @endforeach

    @foreach($dataCommentPilot as $Comment)
        <h5 class="card-title">Commentaires des pilotes</h5>
        <p class="card-text">
            Prénom : {{$Comment['First_Name']}} </br>
            Nom : {{$Comment['Last_Name']}} </br>
            Difficulté du stage : {{$Comment['Internship_Difficulty']}} </br>
            Niveau d'apprentissage : {{$Comment['Level_Of_Knowledge']}} </br>
            Environnement de travail : {{$Comment['Work_Environment']}} </br>
        </p>
    @endforeach

@stop
