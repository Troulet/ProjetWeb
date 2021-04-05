<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body> 
       @include('header')
    
    <div>
        {!! Form::open(['url' => '/Postulate', 'method' => 'post']) !!}
        <fieldset>
            <legend>Information étape 2 </legend>

            <p>L'entreprise valide la candidature ? : <p>
            <div>
              <label for="yes">Oui</label>
              <input type="radio" id="yes" name="state" value="Oui" checked>
              
            </div>

            <div>
              <label for="no">Non</label>
              <input type="radio" id="no" name="state" value="Non">
            </div>

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    
       @include('footer')
</body>
