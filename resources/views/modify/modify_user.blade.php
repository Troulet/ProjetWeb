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
    
        {!! Form::open(['url' => '/Users', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Utilisateur</button>
        {!! Form::close() !!}
        <div>
            {!! Form::open(['url' => '/Users_Update', 'method' => 'post']) !!}

                <fieldset>

                    <legend>Modifier un élève</legend>

                    <input type='hidden' name="Users_id" value="{{$dataUser['Users_id']}}">
                    <input type='hidden' name="UpUser_type" value="{{$UpUser_type}}"> <br>

                    <label id="First_Label" for="First_Name">Prénom de l'élève : </label>
                    <input type="text" name="First_Name" id="First_Name" value="{{$dataUser['First_Name']}}"/> <br>
     
                    <label id="Last_Label" for="Last_Name">Nom de l'élève : </label>
                    <input type="text" name="Last_Name" id="Last_Name" value="{{$dataUser['Last_name']}}"/> <br>

                    <label id="Localisation_Label" for="Localisation">Localité : </label>
                    <input type="text" name="Localisation_Name" id="Localisation_Name" value="{{$dataUser['Localisation_Name']}}"/> <br>

                    <label id="email_Label" for="Email">Email :  </label>
                    <input type="text" name="email" id="Email" value="{{$dataUser['email']}}"/> <br>


                    @if($UpUser_type == 0 || $UpUser_type == 1)
                        <label id="Promotion_Label" for="Promotion">Promotion :  </label>
                        <input type="text" name="Promotion" id="Promotion" value="{{$dataUser['Promotion']}}"/> <br>

                        @if($UpUser_type == 0 && $UpUser_type != 1)
                            <label id="Representative_Label" for="Representative">Délégué</label>
                            <input type="checkbox" name="Representative" id="Representative" value="{{$dataUser['Representative']}}" required/> <br>
            
                            <label id="Representative_Rights_Label" for="Representative_Rights">Droits :  </label>
                            <input type="text" name="Representative_Rights" id="Representative_Rights" value="{{$dataUser['Representative_Rights']}}" required/> 
                        @endif
                    @endif

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
