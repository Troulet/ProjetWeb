<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
    <div id="1">
       <div id="header">
        <div class="titre">
            <img class="logo2" src="../resources/img/logo_cesi2.0.png">
            <h1>LES P'TITES ANNONCES</h1>
            <h2>Cherche et trouve le stage qui te correspond !</h2>
        </div>
        </div>
    </div>
    <div>
        {!! Form::open(['url' => '/Offer', 'method' => 'post']) !!}
        <fieldset>
            <legend>Créer un pilote</legend>
     
            <label for="First_Name_User">Prénom du pilote : </label>
            <input type="text" name="First_Name_User" id="v" />
     
            <label for="Last_Name_User">Nom du pilote : </label>
            <input type="text" name="Last_Name_User" id="Last_Name_User" />

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation" id="Localisation" />

            <label for="Promotions_assigned">Promotions assignées : </label>
            <input type="text" name="Promotions_assigned" id="Promotions_assigned" />

            <label for="Email">Email :  </label>
            <input type="text" name="Email" id="Email" />

            <label for="Password">Mot de passe :  </label>
            <input type="text" name="Password" id="Password" />

        </fieldset>
        <button type="submit" class="btn">CREER</button>

        <fieldset>
            <legend>Modifier un pilote</legend>
     
            <label for="First_Name_User">Prénom du pilote : </label>
            <input type="text" name="First_Name_User" id="v" />
     
            <label for="Last_Name_User">Nom du pilote : </label>
            <input type="text" name="Last_Name_User" id="Last_Name_User" />

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation" id="Localisation" />

            <label for="Promotions_assigned">Promotions assignées : </label>
            <input type="text" name="Promotions_assigned" id="Promotions_assigned" />

            <label for="Email">Email :  </label>
            <input type="text" name="Email" id="Email" />

            <label for="Password">Mot de passe :  </label>
            <input type="text" name="Password" id="Password" />
            
        </fieldset>
        <button type="submit" class="btn">MODIFIER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
</body>
