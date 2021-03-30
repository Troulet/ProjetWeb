<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="stats_student.css"/>
        <link rel= "stylesheet" href="header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <div id="1">
                <div id="header">
                    <div class="titre">
                        <h2>Statistiques élèves</h2>
                    </div>
                </div>
            </div>
        </header>
        <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
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

      <div class="row">
        <div class="col-xs-12 col-md-8 offset-md-2 block border">
            <div class="wrapper-progressBar">
            <ul class="progressBar">
                <li class="active">Fiche de validation</li>
                <li class="active">Convention de stage</li>
                <li>Stagiaire</li>
            </ul>
            </div>
        </div>
      </div>

    </body>
    <?php 
    include("footer.blade.php"); 
    ?>
</html>
