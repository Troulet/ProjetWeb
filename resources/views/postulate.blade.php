<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="postulate.css"/>
        <title>LES P'TITES ANNONCES</title>
        
    <body>
        <?php 
          include("header.blade.php"); 
        ?>
        <div id="id_candidature" class="candidature">
            <h2>Statistiques</h2>
            <label for="post_nbre"> Candidatures déposées:</label><br>
            <input type="int" name="post_nbre" id="post_nbre" required><br><br>

            <label for="date"> Date de la dernière candidature postée:</label><br>
            <input type="Date" name="date" id="date" required><br><br>
            
            <button class="buton" type="button">CANDIDATURE AVEC RÉPONSE</button>
            <button class="buton" type="button">CANDIDATURE SANS RÉPONSE</button>
            <button class="buton" type="button">TOUT</button>
        </div>
        <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Numéro de candidature</th>
                  <th scope="col">Entreprise</th>
                  <th scope="col">Intitulé du poste</th>
                  <th scope="col">Curriculum vitae</th>       <!--Réponse = oui/non uniquement-->
                  <th scope="col">Lettre de motivation</th>   <!--Réponse = oui/non uniquement-->
                  <th scope="col">Réponse</th>                <!--Réponse = oui/non uniquement-->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
        <div class="wishlist">
        <div class="list-group">
            <h3>Wish-List</h3>
            <a href="#" class="list-group-item list-group-item-action">Choix 1</a>
            <a href="#" class="list-group-item list-group-item-action">Choix 2</a>
            <a href="#" class="list-group-item list-group-item-action">Choix 3</a>
            <a href="#" class="list-group-item list-group-item-action">Choix 4</a>
        </div>
    </div>
    </body>

    <?php 
          include("footer.blade.php"); 
    ?>
</html>
