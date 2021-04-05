<!DOCTYPE html>
<html>
<meta charsert="utf-8" />
        <link rel= "stylesheet" href="../resources/views/create/create_enterprise.css">
        <link rel= "stylesheet" href="../resources/views/header_footer.css">
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
   
    @include('header')<br>
            <form class="retour">
            {!! Form::open(['url' => '/Offer', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Offre</button>
            {!! Form::close() !!}
            </form>

    <div>
        <form class="creer">
        {!! Form::open(['url' => '/Enterprise_Create', 'method' => 'post']) !!}
        <fieldset>
            <legend>Créer une entreprise</legend>

            <div class="name">
            <label for="Enterprise_name">Nom de l'entreprise : </label>
            <input type="text" name="Enterprise_Name" id="Enterprise_name" /><br>
            </div>

            <div class="activity">
            <label for="Activity_sector">Secteur d'activité : </label>
            <input type="text" name="Activity_Sector" id="Activity_sector" /><br>
            </div>

            <div class="localisation">
            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation_Name" id="Localisation" /><br>
            </div>

            <div class="number_student">
            <label for="Cesi_Student_Taken">Nombre d'étudiants CESI déjà pris : </label>
            <input type="text" name="Cesi_Student_Taken" id="Cesi_Student_Taken" />
            </div>

        </fieldset>
        <button type="submit" id="btn_Create" class="btn_Create">CREER</button>
        {!! Form::close() !!}
        </form>
    </div>
    </script>
          @include('footer')
</body>
</html>
