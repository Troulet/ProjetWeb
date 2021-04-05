@extends('internship.internship_profile')

@section('profile_enterprise')
    <h5 class="card-title">Entreprise</h5>
    <p class="card-text">
        Nom de l'entreprise : {{$dataEnterprise['Enterprise_Name']}} </br>
        Secteur d'activité : {{$dataEnterprise['Activity_Sector']}} </br>
        Etudiants CESI déjà pris : {{$dataEnterprise['Cesi_Student_Taken']}} </br>
        Localisation : {{$dataEnterprise['Localisation_Name']}} </br>     
        @if($dataEnterprise['deleted_at'] != null)
            {!! Form::open(['url' => '/Enterprise_Restore', 'method' => 'post']) !!}
                    <input name='id' type="hidden" value="{{$dataEnterprise['id']}}">
                    <button type="submit" class="btn">Restore</button>
            {!! Form::close() !!}
        @else
            {!! Form::open(['url' => '/Enterprise_Delete', 'method' => 'post']) !!}
                    <input name='id' type="hidden" value="{{$dataEnterprise['id']}}">
                    <button type="submit" class="btn">Supprimer</button>
            {!! Form::close() !!}

            {!! Form::open(['url' => '/Enterprise_Update', 'method' => 'get']) !!}
                    <input name='id' type="hidden" value="{{$dataEnterprise['id']}}">
                    <button type="submit" class="btn">Modifier</button>
            {!! Form::close() !!}
            {!! Form::open(['url' => '/Offer_Create', 'method' => 'get']) !!}
                <input type='hidden' name="Enterprise_id" value="{{$dataEnterprise['id']}}">
                <button type="submit" class="btn">Créer une Offre</button>
            {!! Form::close() !!}
        @endif
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

             <button type="submit" id="btn_Evaluate" class="btn_Evaluate">Evaluer</button>
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
