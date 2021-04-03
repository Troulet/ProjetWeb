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
<div id="carousel" class="carousel slide" data-mdb-ride="carousel">

<!--Caroussel-->
    <section class="carousel_1">
      <div class="container">
      <h2>Offres :</h2>
          <div class="carousel slide" data-ride="carousel" id="multi_item1" data-intervale="2000">
              <div class="carousel-inner">
                  
                           @yield('carousel_offer')
                      
              </div>

              <a class="carousel-control-prev" href="#multi_item1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#multi_item1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
  
    </section>
</div>

      <!--bouton du pop-up-->
      <button class="postuler" type="button">POSTULER</button><br>
      <button class="wish_list" type="button">AJOUTER A LA WISH-LIST</button><br>
      <button class="eval" type="button">EVALUER LE PROFIL</button><br>
      <button class="suppr" type="button">SUPPRIMER LE PROFIL</button><br>
      <button class="modif" type="button">MODIFIER LE PROFIL</button><br>
      <button class="contacter" type="button">CONTACTER L'ENTREPRISE</button>
      
  </section>
    @include('footer')
</body>
    
</html>
