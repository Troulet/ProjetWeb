<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="../resources/views/internship_pilot.css"/>
        <link rel= "stylesheet" href="../resources/views/header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <?php 
          include("../resources/views/header.blade.php"); 
        ?>
    </br>
            <div class="filtre">
            <h3>Filtrer les résultats</h3>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <section class="categories">
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
        </div>
        <div>
            <input class="creation_E"
           type="button"
           value="CREER UNE ENTREPRISE">
        </div>
        <div>
            <input class="creation_O"
           type="button"
           value="CREER UNE OFFRE">
        </div>

            <!--Caroussel-->
    <!-- Carousel wrapper -->
<div
id="carousel"
class="carousel slide"
data-mdb-ride="carousel"
>
<!--Caroussel-->
<section class="carousel_1">
  <div class="container">
  <h2>Offres :</h2>
      <div class="carousel slide" data-ride="carousel" id="multi_item1" data-intervale="2000">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="row">
                      <div id="banner-one" class="col-sm">
                          <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="1 slide">
                          <img class=" w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="1 slide">
                          <div class="card-body">
                              <h5 class="card-title">Stage chez Thalès</h5>
                              <p class="card-text">
                                  Thales recrute un stagiaire en informatique pour du développement.
                              </p>
                              <a href="#" class="btn btn-primary">Aller voir</a>
                          </div>
                      </div>
                      <div id="banner-two" class="col-sm">
                          <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="2 slide">
                          <img class=" w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="2 slide">
                          <div class="card-body">
                              <h5 class="card-title">Stage chez Gertrude</h5>
                              <p class="card-text">
                                  Gertrude recrute un stagiaire en informatique pour du développement web et de la gestion de base de données.
                              </p>
                              <a href="#" class="btn btn-primary">Aller voir</a>
                          </div>
                      </div>
                      <div class="col-sm">
                         <img class="d-block w-100 desk-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="3 slide">
                         <img class=" w-100  mobile-img" src="https://mdbootstrap.com/img/new/standard/nature/181.jpg" alt="3 slide">
                         <div class="card-body">
                              <h5 class="card-title">Stage chez Dassault</h5>
                              <p class="card-text">
                                  Dassault recrute un stagiaire en informatique pour informatiser sa gestion de chaîne de production.
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

    <!--pop-up consulter une entreprise-->
    <section class="offre_selec">
        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="../resources/img/ubi.jpg"
              class="card-img-top"
              alt="..."
            />
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-floating"><i class="fas fa-heart"></i></button>
                      <h5 class="card-title">Stage chez Ubisoft</h5>
                      <p class="card-text">
                        Votre mission si vous l'acceptez sera de nous aider à concevoir notre nouveau site internet.
                      </p>
                    </div>
                  </div>
                </div>
        <!--bouton du pop-up-->
        <button class="suppr" type="button">SUPPRIMER LE PROFIL</button><br>
        <button class="contacter" type="button">CACHER LE PROFIL</button><br>
        <button class="modif" type="button">MODIFIER LE PROFIL</button>
    </section>
    <?php 
          include("../resources/views/footer.blade.php"); 
    ?>
    </body>
    
</html>
