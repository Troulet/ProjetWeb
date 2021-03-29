<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8">
        <link rel= "stylesheet" href="student_pilot.css">
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
                            <input type="checkbox" id="student" name="student">
                            <label for="student">Étudiant</label>
                        </div>
                        <div>
                            <input type="checkbox" id="representative" name="representative">
                            <label for="representative">Délégué</label>
                        </div>
                    <h3>Promotion</h3>
                        <div>
                            <input type="checkbox" id="info" name="info">
                            <label for="info">A1 Informatique</label>
                        </div>
                        <!--insérer boucle qui affiche les promo assigné au pilote -->
                    <h3>Avancement dans la recherche de stage</h3>
                        <div>
                            <input type="checkbox" id="no_intership" name="no_intership">
                            <label for="no_intership">Sans stage</label>
                        </div>
                        <div>
                            <input type="checkbox" id="in_progress" name="in_progress">
                            <label for="in_progress">En cours</label>
                        </div>
                        <div>
                            <input type="checkbox" id="internship_found" name="internship_found">
                            <label for="internship_found">Stage trouvé</label>
                        </div>
                </div>
            </div>
            <div class="profil_card">
                <h2>Profil Élève</h2>
                <div class="card">
                    <div class="card-body">
                       Données de l'élève (login, promo, centre, nbre de candidature, email etc)
                    </div>
                    <div>
                        <button type="button" class="btn">SUPPRIMER</button>
                        <button type="button" class="btn">MODIFIER</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                       Données de l'élève (login, promo, centre, nbre de candidature, email etc)
                    </div>
                    <div>
                        <button type="button" class="btn">SUPPRIMER</button>
                        <button type="button" class="btn">MODIFIER</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                       Données de l'élève (login, promo, centre, nbre de candidature, email etc)
                    </div>
                    <div>
                        <button type="button" class="btn">SUPPRIMER</button>
                        <button type="button" class="btn">MODIFIER</button>
                    </div>
                </div>
            </div>
        <div>
            <button type="button" class="btn">CRÉER UN PROFIL UTILISATEUR</button>
        </div>
    </body>

    <?php 
          include("footer.blade.php"); 
    ?>
</html>
