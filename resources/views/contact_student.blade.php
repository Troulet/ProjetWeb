<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="postulate.css"/>
        <link rel= "stylesheet" href="header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
        
    <body>
        <?php 
          include("header.blade.php"); 
        ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact administrateur du centre</h5>
                <p class="card-text">
                Mail : 
                </p>
                <button type="button" class="btn btn-primary">Contacter</button>
            </div>
        </div><br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact pilotes</h5>
                <p class="card-text">
                Mail pilote 1 :
                </p>
                <button type="button" class="btn btn-primary">Contacter</button>
                <p class="card-text">
                Mail pilote 2 :
                </p>
                <button type="button" class="btn btn-primary">Contacter</button>
                <p class="card-text">
                Mail pilote 3 :
                </p>
                <button type="button" class="btn btn-primary">Contacter</button>
            </div>
        </div><br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact délégué</h5>
                <p class="card-text">
                Mail délégué :
                </p>
                <button type="button" class="btn btn-primary">Contacter</button>
            </div>
        </div><br>

        <div class="notif">
            <div class="list-group">
                <h3>Messagerie</h3>

                <a href="#" class="list-group-item list-group-item-action"><h5>Nom du pilote</h5>Message</a>
                <a href="#" class="list-group-item list-group-item-action"><h5>Nom du pilote</h5>Message</a>
                <a href="#" class="list-group-item list-group-item-action"><h5>Nom du pilote</h5>Message</a>
                <a href="#" class="list-group-item list-group-item-action"><h5>Nom du pilote</h5>Message</a>
                <a href="#" class="list-group-item list-group-item-action"><h5>Nom du pilote</h5>Message</a>
                <a href="#" class="list-group-item list-group-item-action"><h5>Nom du pilote</h5>Message</a>
            </div>
        </div>
    </body>
    <?php 
        include("footer.blade.php"); 
    ?>
