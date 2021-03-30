<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="../resources/views/login.css">
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    {!! Form::open(['url' => '/user', 'method' => 'post']) !!}
        <div id="1">
            <img class="logo2" src="../resources/img/logo_cesi2.0.png">
            <h1>Authentification</h1>
            <p><h2>Bienvenue</h2></p>
        </div>
        <div id="2">
            <img class="image_stage" src="../resources/img/stage.jpg">
        </div>
        <div id="3">
            <label for="login">Login :</label><br>
            <input type="text" name="Login" id="login" required><br><br>

         <div>
            <label for="pass">Mot de passe :</label><br>
            <input type="password" id="Password" name="password" minlength="8" required>
         </div>
        <div id="4">
            <p>Cookies !</p>
            <p>Nous permettez vous d'utiliser les cookies ? Ils nous permettent de vous offrir la meilleure expéreience possible sur notre site.</p>

            <input type="radio" id="COOKIE" name="COOKIE" value="yes">
            <label for="yes">Oui</label>

            <input type="radio" id="COOKIE" name="COOKIE" value="no">
            <label for="no">Non</label><br><br>
        </div>
            <button type="submit" class="btn">CONNEXION</button>
    {!! Form::close() !!}
    </body>
    <footer>
        <img class="logo" src="../resources/img/logo_cesi.png">
        <ul>
            <li>
                <a href="https://ent.cesi.fr/?RH=&ksession=9e43032b-00b8-446a-8782-5768fbf6406f" title="ENT" target="blank">ENT</a>
            </li>
            <li>
                <a href="https://www.linkedin.com/school/cesiecoledingenieurs/?trk=public_profile_topcard-school" title="Linkedin" target="blank">Linkedin</a>
            </li>
        </ul>
    </footer>
</html>
