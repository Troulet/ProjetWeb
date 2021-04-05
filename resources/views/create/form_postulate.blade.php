<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
    @include('header')
    <div>
        {!! Form::open(['url' => '/Postulate', 'method' => 'post']) !!}
        <fieldset>
            <legend>Candidature</legend>
     
            <label for="Curriculum_Vitae">Curriculum Vitae : </label>
            <input type="file" name="Curriculum_Vitae" id="Curriculum_Vitae" />
     
            <label for="Motivation_Letter">Lettre de Motivation: </label>
            <input type="file" name="Motivation_Letter" id="Motivation_Letter" />

            <label for="Mail_Content">Contenu du mail : </label>
            <input type="text" name="Mail_Content" id="Mail_Content" />

            <label for="Contact">Contact : </label>
            <input type="text" name="Contact" id="Contact" />

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    @include('footer')

</body>
