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

        @include('header')

        <div>
            {!! Form::open(['url' => '/Enterprise_Commentary', 'method' => 'post']) !!}
                <fieldset>
                    <legend>Ajouter un commentaire</legend>
     
                    <label for="Commentary">Commentaire : </label>
                    <input type="text" name="Commentary" id="Commentary" required/> <br>
     
                    <label for="Internship_Difficulty">Difficulté du stage : </label>
                    <div id="increment_difficulty" class="increment_difficulty">
                        <input id="number_difficulty" type="number" min="0" max="10" value="0" required/>
                    </div> <br>

                    <label for="Level_Of_Knowledge">Niveau d'apprentissage : </label>
                    <div id="increment_level_of_knowledge" class="increment_level_of_knowledge">
                        <input id="number_level" type="number" min="0" max="10" value="0" required/>
                    </div> <br>

                    <label for="Work_Environment">Environnement de travail : </label>
                    <div id="increment_work_environment" class="increment_work_environment">
                        <input id="number_work" type="number" min="0" max="10" value="0" required/>
                    </div> <br>

                    @if($user_type == 0)
                        <label for="Tutor_Lead">Accompagnement tuteur :  </label>
                        <div id="increment_tutor_lead" class="increment">
                            <input id="number_tutor" type="number" min="0" max="10" value="0" required/>
                        </div> <br>
            
                        <label for="Infrastructure">Infrastructure :  </label>
                        <div id="increment_infra" class="increment">
                            <input id="number_infra" type="number" min="0" max="10" value="0" required/>
                        </div> <br>

                        <label for="Accessibility">Accessibilité :  </label>
                        <div id="increment_accessibility" class="increment_accessibility">
                            <input id="number_accessibility" type="number" min="0" max="10" value="0" required/>
                        </div> <br>
                    @endif


                </fieldset>

                <input type="hidden" name="Enterprise_id" value="{{$Enterprise_id}}">
                <button type="submit" class="btn">ENVOYER</button>       
            {!! Form::close() !!}
        </div>
    
        @include('footer')

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
