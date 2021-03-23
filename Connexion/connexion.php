﻿
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel= "stylesheet" href="connexion.css"/>
        <title> Stage - Authentification</title>
        <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/vendors/fontawesome/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>
    <body>
        <div id="1">
            <img class="logo2" src="../img/logo_cesi2.0.png">
            <h1>Authentification<br /><span class="subtitle">Bienvenue</span></h1>
        </div>
        <div id="2">
            <img class="image_stage" src="../img/stage.jpg">
        </div>
        <form method="POST" name="connexion" action="">
            <div id="3" class="id_3">
                <label for="login">Login :</label><br>
                <input type="text" name="Login" id="login" required><br><br>

                <label for="mdp">Mot de passe :</label><br>
                <input type="text" name="Mdp" id="mdp" required><br><br>
                <input type="button" value="Valider" id="btn_connection" /> <br><br>
            </div>

            <div id="4">
                <form class="id_4">
                    <p>Cookies !</p>
                    <p>Nous permettez vous d'utiliser les cookies ? Ils nous permettent de vous offrir la meilleure expérience possible sur notre site.</p>
                        <input type="radio" id="oui" name="cookie" value="oui" checked>
                        <label for="oui">Oui</label>

                        <input type="radio" id="non" name="cookie" value="non">
                        <label for="non">Non</label><br><br>
                </form>
            </div>
            <div id="5">
                <input type="submit" id="connection" name="connection" value="Se connecter"><br><br><br><br><br><br>
            </div>
        </form>
        <div id="jquery_result"></div>
        <footer>
            <img class="logo" src="../img/logo_cesi.png">
            <nav>
            <ul>
                <li>
                
                    <a href="https://ent.cesi.fr/?RH=&ksession=9e43032b-00b8-446a-8782-5768fbf6406f" target="blank">ENT</a>
                </li>
                <li>
                
                    <a href="https://www.linkedin.com/school/cesiecoledingenieurs/?trk=public_profile_topcard-school" target="blank"><i class="fab fa-linkedin-in"></i>Linkedin</a>
             </li>
            </ul>
            </nav>
			<?php

			include "../CONTROLLER/Controller.js"

			?>
            <script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
			
        </footer>
    </body>
</html>
        
