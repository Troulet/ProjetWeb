@extends('welcome.welcome_student')

@section('carousel_enterprise')

    <div class="card-body">
        <div class="carousel-item active">
            <div class="row">
                @php
                    $i=1
                @endphp
                @foreach($dataOffer as $Offer)
                
                    <div id="banner-{{$i}}" class="col-sm">
                        <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="{{$i}} slide">
                        <img class="w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="{{$i}}  slide">
                        <h5 class="card-title">Stage chez {{$Offer['Enterprise_Name']}}</h5>
                        <p class="card-text">
                            {{$Offer['Description']}} </br>
                            Compétences recherchées : {{$Offer['Skills_Researched']}} </br>
                            Promotion ciblée : {{$Offer['Promotion_Researched']}} </br>
                            Nombre de places : {{$Offer['Number_Of_Places']}} </br>
                            Localisation : {{$Offer['Localisation_Name']}} </br>
                        </p>
                        <a href="#" class="btn btn-primary">Aller voir</a>
                    </div>
                @php
                    $i++
                @endphp
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
            </div>
        </div>
    </div>
@stop
