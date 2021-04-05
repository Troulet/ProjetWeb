<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
        @include('header')
    
    <div>
        {!! Form::open(['url' => '/Stats', 'method' => 'post']) !!}
        <fieldset enctype="multipart/form-data">
            <legend>Information étape 6 </legend>
     
            <label for="Internship_Contract">Convention Stage : </label>
            <input type="file" name="Internship_Contract" id="Internship_Contract" />
     

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
 
         @include('footer')
</body>
