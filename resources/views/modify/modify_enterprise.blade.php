<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charsert="utf-8"  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel= "stylesheet" href="../resources/views/modify/modify.css"/>
        <link rel= "stylesheet" href="../resources/views/header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

    <body>
   
        @include('header')

        {!! Form::open(['url' => '/Offer', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Offre</button>
        {!! Form::close() !!}
        <div>
            {!! Form::open(['url' => '/Enterprise_Update', 'method' => 'post']) !!}

                <fieldset>

                    <legend>Modifier une entreprise</legend> <br>

                    <input type='hidden' name="Enterprise_id" value="{{$dataEnterprise['id']}}"> <br>
            
                    <label for="Enterprise_Name">Nom de l'entreprise : </label>
                    <input type="text" name="Enterprise_Name" id="Enterprise_Name" value="{{$dataEnterprise['Enterprise_Name']}}" required/> <br>
     
                    <label for="Activity_Sector">Secteur d'activité : </label>
                    <input type="text" name="Activity_Sector" id="Activity_Sector" value="{{$dataEnterprise['Activity_Sector']}}" required/> <br>

                    <label for="Localisation">Localité : </label>
                    <input type="text" name="Localisation_Name" id="Localisation" value="{{$dataEnterprise['Localisation_Name']}}" required/> <br>

                    <label for="Cesi_Student_Taken">Nombre d'étudiants CESI déjà pris : </label>
                   <input type="text" name="Cesi_Student_Taken" id="Cesi_Student_Taken" value="{{$dataEnterprise['Cesi_Student_Taken']}}" required/> <br>
      
                </fieldset>

                <button type="submit" id="btn_Modify" class="btn_Modify">MODIFIER</button>
            {!! Form::close() !!}
        </div>
        @include('footer')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>
