@extends('template')

@section('carousel_enterprise')

                <h5 class="card-title">Stage chez {{$Enterprise_name}}</h5>
                <p class="card-text">
                {{$Description}}
                Compétences recherchées : {{$Skills_Researched}}
                Promotion ciblée : {{$Promotion_Researched}}
                Nombre de places : {{$Number_of_places}}
                Localisation : {{$Localisation_Name}}
                </p>
                <a href="#" class="btn btn-primary">Aller voir</a>
@stop
