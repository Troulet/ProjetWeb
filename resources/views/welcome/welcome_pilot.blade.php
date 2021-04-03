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
                                <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="1 slide">
                                <img class=" w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="1 slide">
                                <div class="card-body">
                                    <h5 class="card-title">Elève</h5>
                                    <p class="card-text">
                                        Statistiques de cet élève
                                    </p>
                                    <a href="#" class="btn btn-primary">Aller voir</a>
                                </div>
                            </div>
                            <div id="banner-two" class="col-sm">
                                <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="2 slide">
                                <img class=" w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="2 slide">
                                <div class="card-body">
                                    <h5 class="card-title">Elève</h5>
                                    <p class="card-text">
                                        Statistique de cet élève
                                    </p>
                                    <a href="#" class="btn btn-primary">Aller voir</a>
                                </div>
                            </div>
                            <div id="banner-three" class="col-sm">
                                <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="3 slide">
                                <img class=" w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="3 slide">
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
                            <div class="col-sm"><img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="4 slide"></div>
                            <div class="col-sm"><img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="5 slide"></div>
                            <div class="col-sm"><img class="d-block w-100" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="6 slide"></div>
                        </div>
                    </div>
                </div>
                <a id="go_previous" class="carousel-control-prev" href="#multi_item" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a id="go_next" class="carousel-control-next" href="#multi_item" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        @include('footer')
    </body>

</html>