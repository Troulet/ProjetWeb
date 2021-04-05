<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<link rel= "stylesheet" href="../resources/views/welcome/create_user.css"/>
<body>
    @include('header')
    <div>
        {!! Form::open(['url' => '/Postulate_Create', 'method' => 'post']) !!}
        <fieldset>
            <legend>Candidature</legend>
     
            <label for="Curiculum_Vitae">Curriculum Vitae : </label>
            <input type="file" name="Curiculum_Vitae" id="Curiculum_Vitae" />
     
            <label for="Motivation_Letter">Lettre de Motivation: </label>
            <input type="file" name="Motivation_Letter" id="Motivation_Letter" />

            <label for="Mail_Content">Contenu du mail : </label>
            <input type="text" name="Mail_Content" id="Mail_Content" />

            <label for="Contact">Contact : </label>
            <input type="text" name="Contact" id="Contact" />

        </fieldset>
        <input type="hidden" name="Internship_id" value="{{$Internship_id}}">
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    @include('footer')

</body>
