<!DOCTYPE html>
<html>
    <head>
            <meta charsert="utf-8" />
            <link rel= "stylesheet" href="../resources/views/create/create_user.css">
            <link rel= "stylesheet" href="../resources/views/header_footer.css">
            <title>LES P'TITES ANNONCES</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <div>
        @include('header')
        </div>
   
                {!! Form::open(['url' => '/Users', 'method' => 'get']) !!}
                <button type="submit" class="btn">Retour à la page Utilisateur</button>
                {!! Form::close() !!}

        <div>
            <button type="btn" id="btn_Admin" class="btn">CREER UN PROFIL ADMINISTRATEUR</button>
            <button type="btn" id="btn_Pilot" class="btn">CREER UN PROFIL PILOTE</button>
            <button type="btn" id="btn_Student" class="btn">CREER UN PROFIL ETUDIANT</button>

            {!! Form::open(['url' => '/Users_Create', 'method' => 'post']) !!}

            <fieldset>

                <legend>Créer un élève</legend> <br>

                <label id="First_Label" for="First_Name">Prénom de l'élève : </label>
                <input type="text" name="First_Name" id="First_Name" /> <br>
     
                <label id="Last_Label" for="Last_Name">Nom de l'élève : </label>
                <input type="text" name="Last_Name" id="Last_Name" /> <br>

                <label id="Localisation_Label" for="Localisation">Localité : </label>
                <input type="text" name="Localisation_Name" id="Localisation_Name" /> <br>

                <label id="Promotion_Label" for="Promotion">Promotion :  </label>
                <input type="text" name="Promotion" id="Promotion" /> <br>
      
                <label id="email_Label" for="Email">Email :  </label>
                <input type="text" name="email" id="email" /> <br>

                <label id="password_Label" for="Password">Mot de passe :  </label>
                <input type="text" name="password" id="password" /> <br>

                <label id="Representative_Label" for="Representative">Délégué</label>
                <input type="radio" name="Representative" id="Representative" text="Oui" value="1"/>
                <input type="radio" name="Representative" id="Representative2" text="Non" value="0"/> <br>
            
                <label id="Representative_Rights_Label" for="Representative_Rights">Droits :  </label>
                <input type="text" name="Representative_Rights" id="Representative_Rights" value="0"/>
                <input type="hidden" name="UpUser_type" id="UpUser_type" /> <br>

            </fieldset>

            <button type="submit" id="btn_Create" class="btn_Create">CREER</button>
        
            {!! Form::close() !!}
        </div>

        <div id="result"></div>
        <script type="text/javascript" src="../resources/js/Create_user.js">

        </script> 
              @include('footer')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
