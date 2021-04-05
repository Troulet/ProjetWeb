@extends('welcome.welcome')

@section('welcome')
  
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($dataEnterprise as $key=>$Enterprise)
                <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}}">
            
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

                </div>
            @endforeach
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
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
