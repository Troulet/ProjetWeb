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
            {!! Form::open(['url' => '/Offer_Update', 'method' => 'post']) !!}

                <fieldset>
                    <legend>Modifier une offre</legend> <br>

                    <input type='hidden' name="Internship_id" value="{{$dataOffer['id']}}"> 
     
                    <label>Nom de l'entreprise : {{$dataOffer['Enterprise_Name']}}</label> <br>

                    <label for="Description">Description : </label>
                    <input type="text" name="Description" id="Description" value="{{$dataOffer['Description']}}" required/> <br>
     
                    <label for="Promotion_researched">Promotion visée : </label>
                    <input type="text" name="Promotion_researched" id="Promotion_researched" value="{{$dataOffer['Promotion_researched']}}" required/> <br>

                    <label for="Localisation">Localité : </label>
                    <input type="text" name="Localisation_Name" id="Localisation" value="{{$dataOffer['Localisation_Name']}}" required/> <br>

                    <label for="Skills_researched">Compétences recherchées : </label>
                    <input type="text" name="Skills_researched" id="Skills_researched" value="{{$dataOffer['Skills_researched']}}" required/> <br>
      
                    <label for="Duration">Durée : </label>
                    <input type="text" name="Internship_Duration" id="Duration" value="{{$dataOffer['Internship_Duration']}}" required/> <br>

                    <label for="Salary">Gratification : </label>
                    <input type="text" name="Salary" id="Salary" value="{{$dataOffer['Salary']}}" required/> <br>

                    <label for="Contact">Contact : </label>
                    <input type="text" name="Contact" id="Contact" value="{{$dataOffer['Contact']}}" required/> <br>

                    <label for="Number_Of_Places">Nombre de places : </label>
                    <input type="text" name="Number_Of_Places" id="Number_Of_Places" value="{{$dataOffer['Number_Of_Places']}}" required/> <br>

                </fieldset>
            <button type="submit" id="btn_Create" class="btn_Create">MODIFIER</button>
            {!! Form::close() !!}
        </div>
        @include('footer')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
