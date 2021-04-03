@extends('internship.internship_profile')

@section('profile_enterprise')
    <h5 class="card-title">Entreprise</h5>
    <p class="card-text">
        Nom de l'entreprise : {{$dataEnterprise['Enterprise_Name']}} </br>
        Secteur d'activité : {{$dataEnterprise['Activity_Sector']}} </br>
        Etudiants CESI déjà pris : {{$dataEnterprise['Cesi_Student_Taken']}} </br>
        Localisation : {{$dataEnterprise['Localisation_Name']}} </br>

        <button type="submit" id="btn_Modify" class="btn">Modifier</button>
        <button type="submit" id="btn_Supp" class="btn">Supprimer</button>
    </p>
    @if($dataOffer !== null)
    @foreach($dataOffer as $Offer)
        <h5 class="card-title">Stage proposé</h5>
        <p class="card-text">
            {{$Offer['Description']}} </br>
            Compétences recherchées : {{$Offer['Skills_Researched']}} </br>
            Promotion ciblée : {{$Offer['Promotion_Researched']}} </br>
            Nombre de places : {{$Offer['Number_Of_Places']}} </br>
            Localisation : {{$Offer['Localisation_Name']}} </br>
        </p>
        {!! Form::open(['url' => '/Offer_Profil', 'method' => 'post']) !!}
             <input name='id' type="hidden" value="{{$Offer['id']}}">
             <button type="submit" class="btn">Aller voir</button>
        {!! Form::close() !!}
    @endforeach
    @endif

    @if($dataCommentStudent !== null)
    @foreach($dataCommentStudent as $Comment)
        <h5 class="card-title">Commentaire d'un étudiant</h5>
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
    @endif

    @if($dataCommentPilot !== null)
    @foreach($dataCommentPilot as $Comment)
        <h5 class="card-title">Commentaire d'un pilote de formation</h5>
        <p class="card-text">
            Prénom : {{$Comment['First_Name']}} </br>
            Nom : {{$Comment['Last_Name']}} </br>
            Difficulté du stage : {{$Comment['Internship_Difficulty']}} </br>
            Niveau d'apprentissage : {{$Comment['Level_Of_Knowledge']}} </br>
            Environnement de travail : {{$Comment['Work_Environment']}} </br>
        </p>
    @endforeach
    @endif

@stop
