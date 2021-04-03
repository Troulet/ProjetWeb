@extends('internship.internship_student')

@section('carousel_offer')
    <div class="carousel-item active">
            <div class="row">
            @php
            $i=1
            @endphp
            @foreach($dataOffer as $Offer)
                <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="{{$i}} slide">
                <img class="w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="{{$i}} slide">
                <h5 class="card-title">Stage chez {{$Offer['Enterprise_Name']}}</h5>
                <p class="card-text">
                    {{$Offer['Description']}} </br>
                    Compétences recherchées : {{$Offer['Skills_Researched']}} </br>
                    Promotion ciblée : {{$Offer['Promotion_Researched']}} </br>
                    Nombre de places : {{$Offer['Number_Of_Places']}} </br>
                    Localisation : {{$Offer['Localisation_Name']}} </br>
                </p>
                <a href="#" class="btn btn-primary">Aller voir</a>
                @php
                $i++
                @endphp
            @endforeach
            @foreach($dataEnterprise as $Enterprise)
                
                <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="{{$i}} slide">
                <img class="w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="{{$i}} slide">
                <h5 class="card-title">Entreprise {{$Enterprise['Enterprise_Name']}}</h5>
                <p class="card-text">
                    Travaille dans le secteur : {{$Enterprise['Activity_Sector']}} </br>
                    A déjà pris {{$Enterprise['Cesi_Student_Taken']}} élèves. </br>
                    Nombre de places : {{$Offer['Number_Of_Places']}} </br>
                    Se situe à {{$Enterprise['Localisation_Name']}} ! </br>
                </p>
                <a href="#" class="btn btn-primary">Aller voir</a>
                @php
                $i++
                @endphp
            @endforeach

            </div>
    </div>
@endsection
