<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
     
          @include('../resources/views/header.blade.php')
   
            {!! Form::open(['url' => '/Users', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Utilisateur</button>
            {!! Form::close() !!}

    <div>
        <button type="btn" id="btn_Admin" class="btn">CREER UN PROFIL ADMINISTRATEUR</button>
        <button type="btn" id="btn_Pilot" class="btn">CREER UN PROFIL PILOTE</button>
        <button type="btn" id="btn_Student" class="btn">CREER UN PROFIL ETUDIANT</button>

        {!! Form::open(['url' => '/Users_Create', 'method' => 'post']) !!}

        <fieldset>

            <legend>Créer un élève</legend>

            <label id="First_Label" for="First_Name">Prénom de l'élève : </label>
            <input type="text" name="First_Name" id="First_Name" />
     
            <label id="Last_Label" for="Last_Name">Nom de l'élève : </label>
            <input type="text" name="Last_Name" id="Last_Name" />

            <label id="Localisation_Label" for="Localisation">Localité : </label>
            <input type="text" name="Localisation_Name" id="Localisation_Name" />

            <label id="Promotion_Label" for="Promotion">Promotion :  </label>
            <input type="text" name="Promotion" id="Promotion" />
      
            <label id="email_Label" for="Email">Email :  </label>
            <input type="text" name="email" id="email" />

            <label id="password_Label" for="Password">Mot de passe :  </label>
            <input type="text" name="password" id="password" />

            <label id="Representative_Label" for="Representative">Délégué</label>
            <input type="radio" name="Representative" id="Representative" text="Oui" value="1"/>
            <input type="radio" name="Representative" id="Representative2" text="Non" value="0"/>
            
            <label id="Representative_Rights_Label" for="Representative_Rights">Droits :  </label>
            <input type="text" name="Representative_Rights" id="Representative_Rights" value="0"/>
            <input type="hidden" name="UpUser_type" id="UpUser_type" />

        </fieldset>

        <button type="submit" id="btn_Create" class="btn_Create">CREER</button>
        
        {!! Form::close() !!}
    </div>

    <div id="result"></div>
    <script type="text/javascript" src="../resources/js/Create_user.js">

    </script> 
          @include('../resources/views/footer.blade.php')
</body>
