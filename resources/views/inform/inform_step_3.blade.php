<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
        @include('header')
    
    <div>
        {!! Form::open(['url' => '/Contact', 'method' => 'post']) !!}
        <fieldset enctype="multipart/form-data">
            <legend>Information étape 3 </legend>
     
            <label for="Validation_Sheet">Envoyer la fiche de validation : </label>
            <input type="file" name="Validation_Sheet" id="Validation_Sheet" />
     

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    
        @include('footer')
</body>
