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
            <legend>Information étape 5 </legend>
     
            <label for="Internship_Contract">Convention Stage : </label>
            <input type="file" name="Internship_Contract" id="Internship_Contract" />
     

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
</body>
