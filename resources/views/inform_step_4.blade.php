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
        {!! Form::open(['url' => '/Stats', 'method' => 'post']) !!}
        <fieldset enctype="multipart/form-data">
            <legend>Information étape 4 </legend>
     
            <label for="Validation_Sheet">Fiche de validation : </label>
            <input type="file" name="Validation_Sheet" id="Validation_Sheet" />
     

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
</body>
