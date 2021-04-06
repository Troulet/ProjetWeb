<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charsert="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel= "stylesheet" href="../resources/views/create/create_enterprise.css">
        <link rel= "stylesheet" href="../resources/views/header_footer.css">
        <title>LES P'TITES ANNONCES</title>
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        @include('header')

        <div>
            {!! Form::open(['url' => '/Postulate_Create', 'method' => 'post']) !!}
                <fieldset>
                    <legend>Candidature</legend>
     
                    <label for="Curiculum_Vitae">Curriculum Vitae : </label>
                    <input type="file" name="Curiculum_Vitae" id="Curiculum_Vitae" required/> <br>
     
                    <label for="Motivation_Letter">Lettre de Motivation: </label>
                    <input type="file" name="Motivation_Letter" id="Motivation_Letter" required/> <br>

                    <label for="Mail_Content">Contenu du mail : </label>
                    <input type="text" name="Mail_Content" id="Mail_Content" required/> <br>

                    <label for="Contact">Contact : </label>
                    <input type="text" name="Contact" id="Contact" required/> <br>

                </fieldset>
                <input type="hidden" name="Internship_id" value="{{$Internship_id}}">
                <button type="submit" class="btn">ENVOYER</button>
        
            {!! Form::close() !!}
        </div>

        @include('footer')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
