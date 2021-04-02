<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
    <?php 
          include("../resources/views/header.blade.php"); 
    ?>
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
        {!! Form::open(['url' => '/Offer/Entreprise', 'method' => 'post']) !!}
        <fieldset>
            <legend>Créer une entreprise</legend>
     
            <label for="Enterprise_name">Nom de l'entreprise : </label>
            <input type="text" name="Enterprise_name" id="Enterprise_name" />
     
            <label for="Activity_sector">Secteur d'activité : </label>
            <input type="text" name="Activity_sector" id="Activity_sector" />

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation" id="Localisation" />

            <label for="Cesi_Student_Taken">Nombre d'étudiants CESI déjà pris : </label>
            <input type="text" name="Cesi_Student_Taken" id="Cesi_Student_Taken" />
      
        </fieldset>
        <button type="submit" class="btn">CREER</button>

        <fieldset>
            <legend>Modifier une entreprise</legend>
     
            <label for="Enterprise_name">Nom de l'entreprise : </label>
            <input type="text" name="Enterprise_name" id="Enterprise_name" />
     
            <label for="Activity_sector">Secteur d'activité : </label>
            <input type="text" name="Activity_sector" id="Activity_sector" />

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation" id="Localisation" />

            <label for="Cesi_Student_Taken">Nombre d'étudiants CESI déjà pris : </label>
            <input type="text" name="Cesi_Student_Taken" id="Cesi_Student_Taken" />
      
        </fieldset>
        <button type="submit" class="btn">MODIFIER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
    <?php 
          include("../resources/views/footer.blade.php"); 
    ?>
</body>
