<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body> 
       @include('header')
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
        <fieldset>
            <legend>Information étape 2 </legend>
     
            <label for="Response_State">Réponse de l'entreprise : </label>
            <input type="text" name="Response_State" id="Response_State" />
     

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    
       @include('footer')
</body>
