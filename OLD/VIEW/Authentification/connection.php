<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="connexion.css"/>
        <title>LES P'TITES ANNONCES</title>
    </head>
    <body>
        <div id="1">
            <img class="logo2" src="img/logo_cesi2.0.png">
            <h1>Authentification</h1>
            <p><h2>Bienvenue</h2></p>
        </div>
        <div id="2">
            <img class="image_stage" src="img/stage.jpg">
        </div>
        <div id="3">
            <label for="login">Login :</label><br>
            <input type="text" name="Login" id="login" required><br><br>

            <label for="mdp">Mot de passe :</label><br>
            <input type="text" name="Password" id="password" required><br><br>
        </div>
        <div id="4">
            <p>Cookies !</p>
            <p>Nous permettez vous d'utiliser les cookies ? Ils nous permettent de vous offrir la meilleure expéreience possible sur notre site.</p>

            <input type="radio" id="COOKIE" name="COOKIE" value="yes">
            <label for="yes">Oui</label>

            <input type="radio" id="COOKIE" name="COOKIE" value="no">
            <label for="no">Non</label><br><br>
        </div>
    </body>
    <footer>
        <img class="logo" src="C:\xampp\htdocs\Projet\img\logo_cesi.png">
        <ul>
            <li>
                <a href="https://ent.cesi.fr/?RH=&ksession=9e43032b-00b8-446a-8782-5768fbf6406f" title="ENT" target="blank">ENT</a>
            </li>
            <li>
                <a href="https://www.linkedin.com/school/cesiecoledingenieurs/?trk=public_profile_topcard-school" title="Linkedin" target="blank">Linkedin</a>
            </li>
        </ul>
    </footer>

    <?php require '../CONTROLLER/Authentification.js'; ?>

</html>