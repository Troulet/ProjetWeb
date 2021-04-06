<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charsert="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel= "stylesheet" href="../resources/views/create/create_enterprise.css">
        <link rel= "stylesheet" href="../resources/views/header_footer.css">
        <title>LES P'TITES ANNONCES</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
   
        @include('header')<br>

        {!! Form::open(['url' => '/Offer', 'method' => 'get',  'class' => 'retour']) !!}
            <button type="submit" class="btn">Retour à la page Offre</button>
        {!! Form::close() !!}

        <div>

            {!! Form::open(['url' => '/Enterprise_Create', 'method' => 'post', 'class' => 'creer']) !!}
                <fieldset>
                    <legend>Créer une entreprise</legend>

                    <div class="name">
                        <label for="Enterprise_name">Nom de l'entreprise : </label>
                        <input type="text" name="Enterprise_Name" id="Enterprise_name" required/><br>
                    </div>

                    <div class="activity">
                        <label for="Activity_sector">Secteur d'activité : </label>
                        <input type="text" name="Activity_Sector" id="Activity_sector" required/><br>
                    </div>
    
                    <div class="localisation">
                        <label for="Localisation">Localité : </label>
                        <input type="text" name="Localisation_Name" id="Localisation" required/><br>
                    </div>

                    <div class="number_student">
                        <label for="Cesi_Student_Taken">Nombre d'étudiants CESI déjà pris : </label>
                        <input type="text" name="Cesi_Student_Taken" id="Cesi_Student_Taken" required/>
                    </div>

                </fieldset>
                <button type="submit" id="btn_Create" class="btn_Create">CREER</button>
            {!! Form::close() !!}

        </div>
        @include('footer')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>
