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
            <input type="text" name="Curriculum_Vitae" id="Curriculum_Vitae" />
     
            <label for="Motivation_Letter">Lettre de Motivation: </label>
            <input type="text" name="Motivation_Letter" id="Motivation_Letter" />

            <label for="Mail_Content">Contenu du mail : </label>
            <input type="text" name="Mail_Content" id="Mail_Content" />

            <label for="Mail_Entreprise">Mail de l'entreprise : </label>
            <input type="text" name="Mail_Entreprise" id="Mail_Entreprise" />

        </fieldset>
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    @include('footer')

</body>
