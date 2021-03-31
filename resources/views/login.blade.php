<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel= "stylesheet" href="../resources/views/login.css">
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="manifest" href="manifest.json">
    </head>
    
    <body>

     <div>
        {!! Form::open(['url' => '/Home', 'method' => 'post']) !!}
        <div id="logo_header">
            <img class="logo2" src="../resources/img/logo_cesi2.0.png">
            <h1>Authentification</h1>
            <p><h2>Bienvenue</h2></p>
        </div>
        <div id="image_login">
            <img class="image_stage" src="../resources/img/stage.jpg">
        </div>
        <fieldset>
            <legend>Vos coordonnées</legend>
     
            <label for="Username">Identifiant</label>
            <input type="text" name="Username" id="Username" />
     
            <label for="Password">Mot de passe</label>
            <input type="text" name="Password" id="Password" />
      
        </fieldset>
      
        <fieldset>
            <legend>Autoriser les cookies ?</legend>

            <p>Nous permettez vous d'utiliser les cookies ? Ils nous permettent de vous offrir la meilleure expérience possible sur notre site.</p>
      
            <p>
                <input type="radio" name="cookie" value="oui" id="oui" /> <label for="oui">Oui</label>
                <input type="radio" name="cookie" value="non" id="non" /> <label for="non">Non</label>
            </p>
        </fieldset>
        <button type="submit" class="btn">CONNEXION</button>
        {!! Form::close() !!}
    </div><br>

    <footer>
        <img id="logo_footer" class="logo" src="../resources/img/logo_cesi.png">
        <ul>
            <li>
                <a href="https://ent.cesi.fr/?RH=&ksession=9e43032b-00b8-446a-8782-5768fbf6406f" title="ENT" target="blank">ENT</a>
            </li>
            <li>
                <a href="https://www.linkedin.com/school/cesiecoledingenieurs/?trk=public_profile_topcard-school" title="Linkedin" target="blank">Linkedin</a>
            </li>
        </ul>
    </footer>
    <script src="js/app.js"></script>
    </body>
</html>
