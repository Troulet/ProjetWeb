<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="user_admin.css"/>
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
                <h3>Filtrer les r�sultats</h3>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div>
                    <h3>Cat�gories</h3>
                        <div>
                            <input type="checkbox" id="student" name="student">
                            <label for="student">�tudiant</label>
                        </div>
                        <div>
                            <input type="checkbox" id="representative" name="representative">
                            <label for="representative">D�l�gu�</label>
                        </div>
                        <div>
                            <input type="checkbox" id="pilot" name="pilot">
                            <label for="pilot">Pilote</label>
                        </div>
                    <h3>Localit�</h3>
                        <div>
                            <input type="checkbox" id="paris" name="paris">
                            <label for="paris">Paris</label>
                        </div>
                        <div>
                            <input type="checkbox" id="bordeaux" name="bordeaux">
                            <label for="bordeaux">Bordeaux</label>
                        </div>
                        <div>
                            <input type="checkbox" id="merignac" name="merignac">
                            <label for="merignac">M�rignac</label>
                        </div>
                        <div>
                            <input type="checkbox" id="lyon" name="lyon">
                            <label for="lyon">Lyon</label>
                        </div>
                        <div>
                            <input type="checkbox" id="olympe" name="olympe">
                            <label for="olympe">Mont Olympe</label> 
                        </div>
                    <h3>Promotion</h3>
                        <div>
                            <input type="checkbox" id="info" name="info">
                            <label for="info">A2 Informatique</label>
                        </div>
                        <div>
                            <input type="checkbox" id="generaliste" name="generaliste">
                            <label for="generaliste">A2 G�n�raliste</label>
                        </div>
                        <div>
                            <input type="checkbox" id="btp" name="btp">
                            <label for="btp">A2 BTP</label>
                        </div>
                        <div>
                            <input type="checkbox" id="s3e" name="s3e">
                            <label for="s3e">A2 S3E</label>
                        </div>
                </div>
            </div>
            <div class="profil_card">
                <h2>Profil Utilisateur</h2>
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
        <div>
            <input class="creation_E"
           type="button"
           value="CR�ER UN PROFIL UTILISATEUR">
        </div>
    </body>

    <?php 
          include("footer.blade.php"); 
    ?>
</html>
