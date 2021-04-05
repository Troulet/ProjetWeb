<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel= "stylesheet" href="../resources/views/welcome/welcome_student.css"/>
        <link rel= "stylesheet" href="../resources/views/header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        @include('header')
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
        @include('footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>
