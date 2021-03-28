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
        <div id="1">
        <img class="logo" src="C:\xampp\htdocs\Projet\img\logo_cesi.png">
        <h1>LES P'TITES ANNONCES.</h1>
        <h2>Les offres qui font plaisir !</h2>
        <div>
            <ul>
                <li>
                    <a href="" target="blank">Offre</a>
                    <a href="" target="blank">Contact</a>
                    <a href="" target="blank">Candidature</a>
                    <a href="" target="blank">Aide</a>
                </li>
            </ul>
        </div>
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
        <input class="creation"
       type="button"
       value="CREER UNE ENTREPRISE">
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
  
<h2>Comparatif des offres :</h2>
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
<!--pop-up création entreprise ?-->

<h3>Offre selectionné :</h3>
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
    <!--bouton du pop-up-->
    <button class="postuler" type="button">POSTULER</button><br>
    <button class="wish_list" type="button">AJOUTER A LA WISH-LIST</button><br>
    <button class="eval" type="button">EVALUER LE PROFIL</button><br>
    <button class="suppr" type="button">SUPPRIMER LE PROFIL</button><br>
    <button class="modif" type="button">MODIFIER LE PROFIL</button><br>
    <button class="contacter" type="button">CONTACTER L'ENTREPRISE</button>
  <footer>
    <img class="logo2" src="../img/logo_cesi2.0.png">
    <ul>
        <li>
            <a href="https://ent.cesi.fr/?RH=&ksession=9e43032b-00b8-446a-8782-5768fbf6406f" target="blank">ENT</a>
        </li>
        <li>
            <a href="https://www.linkedin.com/school/cesiecoledingenieurs/?trk=public_profile_topcard-school" target="blank">Linkedin</a>
        </li>
    </ul>
    <button class="bouton" type="button">Support</button>
    <script src="../jquery/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</footer>
</html>