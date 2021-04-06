<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel= "stylesheet" href="../resources/views/login/login.css">
        <title>LES P'TITES ANNONCES</title>
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="manifest" href="../manifest.json">
    </head>
    
    <body>
        <div class="login">
            {!! Form::open(['url' => '/Public/Home', 'method' => 'post']) !!}
                <div id="logo_header">
                    <img class="logo2" src="../resources/img/logo_cesi2.0.png" alt="logo2">
                    <h1>Authentification</h1>
                    <h2>Bienvenue</h2>
                </div>
                <div id="image_login">
                    <img class="image_stage" src="../resources/img/stage.jpg" alt="image_stage">
                </div>
                <div>
                    <fieldset>
                        <legend>S'authentifier : </legend>
     
                        <label for="Username">Identifiant </label><br>
                        <input type="text" name="email" id="Username" required/><br><br>
     
                        <label for="Password">Mot de passe </label><br>
                        <input type="password" name="password" id="Password" required/>
      
                    </fieldset><br>
                </div>
            <fieldset>
            <legend>Autoriser les cookies ?</legend>

            <p>Nous permettez vous d'utiliser les cookies ? Ils nous permettent de vous offrir la meilleure expérience possible sur notre site.</p>
      
            <p>
                <input type="radio" name="cookie" value="1" id="oui" /> <label for="oui">Oui</label>
                <input type="radio" name="cookie" value="0" id="non" /> <label for="non">Non</label>
            </p>
            </fieldset>
                <button type="submit" class="btn">CONNEXION</button>
            {!! Form::close() !!}
        </div>

        @include('footer')
        <script src="../resources/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
