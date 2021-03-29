<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="connexion.css"/>
        <title>LES P'TITES ANNONCES</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./fontawesome/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <?php 
          include("header.blade.php"); 
        ?>
            <div class="filtre">
            <h3>Filtrer les résultats</h3>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div>
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
            </div>
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
<!-- Controls -->
<div class="d-flex justify-content-center mb-4">
  <button
    class="carousel-control-prev position-relative"
    type="button"
    data-mdb-target="#carousel"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next position-relative"
    type="button"
    data-mdb-target="#carousel"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Inner -->
<div class="carousel-inner py-4">
  <!-- Single item -->
  <div class="carousel-item active">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <img
              src="../img/safran.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-floating"><i class="fas fa-heart"></i></button>
              <h5 class="card-title">Stage informatique chez Safran</h5>
              <p class="card-text">
                Votre mission si vous l'acceptez sera de vous occuper du suivi informatique d'une de nos chaîne de production.
              </p>
              <a href="#!" class="btn btn-primary">Voir</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="../img/ironMan.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-floating"><i class="fas fa-heart"></i></button>
              <h5 class="card-title">Stage pour la Tony Stark Industrie</h5>
              <p class="card-text">
                Depuis que Spider Man à perdu notre dernière armure lors d'un corps à corps avec les forces du mal, nous avons du mal à reconstituer notre base de données. Nous songeons donc à une refonte de notre IA pour la nouvelle armure.
              </p>
              <a href="#!" class="btn btn-primary">Voir</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="../img/ubi.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Game Designer</h5>
              <p class="card-text">
                Participer à la mise en place de feature du jeu en tenant compte des aspects UX
                Concevoir de nouveaux systèmes en accord avec l'équipe Créative et notamment le directeur UX
                Réaliser des documents design clairs et détaillés à destination des équipes du projet et leurs mises à jour
              </p>
              <a href="#!" class="btn btn-primary">Voir</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--pop-up consulter une entreprise-->
    <div>
        <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <img
                      src="../img/safran.jpg"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-floating"><i class="fas fa-heart"></i></button>
                      <h5 class="card-title">Stage informatique chez Safran</h5>
                      <p class="card-text">
                        Votre mission si vous l'acceptez sera de vous occuper du suivi informatique d'une de nos chaîne de production.
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!--bouton du pop-up-->
        <button class="suppr" type="button">SUPPRIMER LE PROFIL</button><br>
        <button class="contacter" type="button">CACHER LE PROFIL</button><br>
        <button class="modif" type="button">MODIFIER LE PROFIL</button>
    </div>
    </body>
    <?php 
          include("footer.blade.php"); 
    ?>
</html>
