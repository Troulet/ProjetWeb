@extends('welcome.welcome')

@section('welcome')
  <div class="container">
    <h2>Offres : </h2>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
             @if($dataEnterprise !== null)
            @foreach($dataEnterprise as $key=>$Enterprise)
            
                <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
                    @if($Enterprise['deleted_at'] == null || ($Enterprise['deleted_at'] != null && $user_type != 0))
                        <h5 class="card-title">Entreprise {{$Enterprise['Enterprise_Name']}}</h5>
                        <p class="card-text">
                            Travaille dans le secteur : {{$Enterprise['Activity_Sector']}} </br>
                            A déjà pris {{$Enterprise['Cesi_Student_Taken']}} élèves. </br>
                            Se situe à {{$Enterprise['Localisation_Name']}} ! </br>
                        </p>
                        {!! Form::open(['url' => '/Enterprise_Profil', 'method' => 'post']) !!}
                            <input name='id' type="hidden" value="{{$Enterprise['id']}}">
                            <button type="submit" class="btn">Aller voir</button>
                        {!! Form::close() !!}
                    @else
                        <h5 class="card-title">Contenu masqué</h5>
                    @endif

                </div>
            @endforeach

            @if($dataOffer !== null)
                @foreach($dataOffer as $Offer)
                    @if($Offer['deleted_at'] == null || ($Offer['deleted_at'] != null && $user_type != 0))
                        <div class="carousel-item">
                            <h5 class="card-title">Stage chez {{$Offer['Enterprise_Name']}}</h5>
                            <p class="card-text">
                                Desccription : {{$Offer['Description']}} </br>
                                Compétences recherchées : {{$Offer['Skills_Researched']}} </br>
                                Promotion ciblée : {{$Offer['Promotion_Researched']}} </br>
                                Nombre de places : {{$Offer['Number_Of_Places']}} </br>
                                Localisation : {{$Offer['Localisation_Name']}} </br>
                            </p>
                            {!! Form::open(['url' => '/Offer_Profil', 'method' => 'post']) !!}
                                <input name='id' type="hidden" value="{{$Offer['id']}}">
                                <button type="submit" class="btn">Aller voir</button>
                            {!! Form::close() !!}
                        </div>
                    @endif
                @endforeach
            @endif

            <button class="carousel-control-prev" type="button" data-target="#carousel_offer" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carousel_offer" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        @endif
        </div>
    </div>
</div>
    <div id="wishlist_student" class="wishlist">
        <div class="list-group">
            <h3>Wish-List</h3>
            <a href="#" class="list-group-item list-group-item-action">Choix 1</a>
            <a href="#" class="list-group-item list-group-item-action">Choix 2</a>
            <a href="#" class="list-group-item list-group-item-action">Choix 3</a>
            <a href="#" class="list-group-item list-group-item-action">Choix 4</a>
        </div>
    </div>
@stop
