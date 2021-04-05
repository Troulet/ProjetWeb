<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>

    @include('header')

    <div>
        {!! Form::open(['url' => '/Enterprise_Commentary', 'method' => 'post']) !!}
        <fieldset>
            <legend>Ajouter un commentaire</legend>
     
            <label for="Commentary">Commentaire : </label>
            <input type="text" name="Commentary" id="Commentary" />
     
            <label for="Internship_Difficulty">Difficulté du stage : </label>
            <input type="text" name="Internship_Difficulty" id="Internship_Difficulty" />

            <label for="Level_Of_Knowledge">Niveau d'apprentissage : </label>
            <input type="text" name="Level_Of_Knowledge" id="Level_Of_Knowledge" />

            <label for="Work_Environment">Environnement de travail : </label>
            <input type="text" name="Work_Environment" id="Work_Environment" />

            @if($user_type == 0)
            <label for="Tutor_Lead">Accompagnement tuteur :  </label>
            <input type="text" name="Tutor_Lead" id="Tutor_Lead" />

            <label for="Infrastructure">Infrastructure :  </label>
            <input type="text" name="Infrastructure" id="Infrastructure" />

            <label for="Accessibility">Accessibilité :  </label>
            <input type="text" name="Accessibility" id="Accessibility" />
            @endif


        </fieldset>
        <input type="hidden" name="Enterprise_id" value="{{$Enterprise_id}}">
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
          @include('footer')
</body>
