<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
        @include('header')
    
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
    
        @include('footer')
</body>
