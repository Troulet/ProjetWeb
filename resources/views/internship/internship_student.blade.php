<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="../resources/views/internship/internship_student.css"/>
        <link rel= "stylesheet" href="../resources/views/header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        @include('header')
    </br>
        <div class="filtre">
          <h3>Filtrer les résultats</h3>
            {!! Form::open(['url' => '/Offer_Search', 'method' => 'post']) !!}
            <input class="form-control me-2" type="search" name="research" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            {!! Form::close() !!}
            <div>
            {!! Form::open(['url' => '/Enterprise_Create', 'method' => 'get']) !!}
                <button type="submit" class="btn">CRÉER UNE ENTREPRISE</button>
            {!! Form::close() !!}
            </div>
        <!--<section class="categories">
            <h3>Catégories</h3>
            <div>
                <input type="checkbox" id="offre" name="offre"
                       >
                <label for="offre">Offre de Stage</label>
            </div>
            <div>
                <input type="checkbox" id="entreprise" name="entreprise"
                       >
                <label for="entreprise">Entreprise</label>
            </div>
            <h3>Localité</h3>
            <div>
                <input type="checkbox" id="paris" name="paris"
                       >
                <label for="paris">Paris</label>
            </div>
            <div>
                <input type="checkbox" id="bordeaux" name="bordeaux"
                       >
                <label for="bordeaux">Bordeaux</label>
            </div>
            <div>
                <input type="checkbox" id="merignac" name="merignac"
                       >
                <label for="merignac">Mérignac</label>
            </div>
            <div>
                <input type="checkbox" id="lyon" name="lyon"
                       >
                <label for="lyon">Lyon</label>
            </div>
            <div>
                <input type="checkbox" id="olympe" name="olympe"
                       >
                <label for="olympe">Mont Olympe</label>
            </div>
            <h3>Promotion</h3>
            <div>
                <input type="checkbox" id="info" name="info"
                       >
                <label for="info">A2 Informatique</label>
            </div>
            <div>
                <input type="checkbox" id="generaliste" name="generaliste"
                       >
                <label for="generaliste">A2 Généraliste</label>
            </div>
            <div>
                <input type="checkbox" id="btp" name="btp"
                       >
                <label for="btp">A2 BTP</label>
            </div>
            <div>
                <input type="checkbox" id="s3e" name="s3e"
                       >
                <label for="s3e">A2 S3E</label>
            </div>
            
          </section>
          <div class="create_enterprise">
            <button class="creation" type="button" value="CREER UNE ENTREPRISE"></button>-->
            </div>
    </div>
    <!--Caroussel-->
    <!-- Carousel wrapper -->

<!--Caroussel-->
    <section class="carousel_1">
      <div class="container">
      <h2>Offres :</h2>
                  
              @yield('carousel_offer')
                     
      </div>
  
    </section>
      
  </section>
    @include('footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
    
</html>
