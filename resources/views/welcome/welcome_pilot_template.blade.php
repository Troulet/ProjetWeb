@extends('welcome.welcome')

@section('welcome')
<div class="container">
            <div class="carousel slide" data-ride="carousel" id="multi_item" data-intervale="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div id="banner-one" class="col-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Elève</h5>
                                    <p class="card-text">
                                        Statistiques de cet élève
                                    </p>
                                    <a href="#" class="btn btn-primary">Aller voir</a>
                                </div>
                            </div>
                            <div id="banner-two" class="col-sm">
                                
                                <div class="card-body">
                                    <h5 class="card-title">Elève</h5>
                                    <p class="card-text">
                                        Statistique de cet élève
                                    </p>
                                    <a href="#" class="btn btn-primary">Aller voir</a>
                                </div>
                            </div>
                            <div id="banner-three" class="col-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">Elève</h5>
                                        <p class="card-text">
                                            Statistique de cet élève
                                        </p>
                                        <a href="#" class="btn btn-primary">Aller voir</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm"> </div>
                            <div class="col-sm"> </div>
                            <div class="col-sm"> </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#multi_item1" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#multi_item1" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
@stop
