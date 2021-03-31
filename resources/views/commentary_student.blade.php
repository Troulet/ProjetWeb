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
            <legend>Ajouter un commentaire</legend>
     
            <label for="Commentary">Commentaire de l'élève : </label>
            <input type="text" name="Commentary" id="Commentary" />
     
            <label for="Internship_Difficulty">Difficulté du stage : </label>
            <input type="text" name="Internship_Difficulty" id="Internship_Difficulty" />

            <label for="Level_of_knowledge">Niveau d'apprentissage : </label>
            <input type="text" name="Level_of_knowledge" id="Level_of_knowledge" />

            <label for="Work_environment">Environnement de travail : </label>
            <input type="text" name="Work_environment" id="Work_environment" />

            <label for="Tutor_Lead">Accompagnement tuteur :  </label>
            <input type="text" name="Tutor_Lead" id="Tutor_Lead" />

            <label for="Infrastructure">Infrastructure :  </label>
            <input type="text" name="Infrastructure" id="Infrastructure" />

            <label for="Accessibility">Accessibilité :  </label>
            <input type="text" name="Accessibility" id="Accessibility" />

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
</body>
