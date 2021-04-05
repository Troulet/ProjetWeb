<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<link rel= "stylesheet" href="../resources/views/create/create_enterprise.css">
<body>

    @include('header')

    <div>
        {!! Form::open(['url' => '/Enterprise_Commentary', 'method' => 'post']) !!}
        <fieldset>
            <legend>Ajouter un commentaire</legend>
     
            <label for="Commentary">Commentaire : </label>
            <input type="text" name="Commentary" id="Commentary" /> <br>
     
            <label for="Internship_Difficulty">Difficulté du stage : </label>
            <div id="increment_difficulty" class="increment_difficulty">
                <input id="number_difficulty" type="number" min="0" max="10" value="0">
            </div> <br>

            <label for="Level_Of_Knowledge">Niveau d'apprentissage : </label>
            <div id="increment_level_of_knowledge" class="increment_level_of_knowledge">
                <input id="number_level" type="number" min="0" max="10" value="0">
            </div> <br>

            <label for="Work_Environment">Environnement de travail : </label>
            <div id="increment_work_environment" class="increment_work_environment">
                <input id="number_work" type="number" min="0" max="10" value="0">
            </div> <br>

            @if($user_type == 0)
            <label for="Tutor_Lead">Accompagnement tuteur :  </label>
            <div id="increment_tutor_lead" class="increment">
                <input id="number_tutor" type="number" min="0" max="10" value="0">
            </div> <br>
            
            <label for="Infrastructure">Infrastructure :  </label>
            <div id="increment_infra" class="increment">
                <input id="number_infra" type="number" min="0" max="10" value="0">
            </div> <br>

            <label for="Accessibility">Accessibilité :  </label>
            <div id="increment_accessibility" class="increment_accessibility">
                <input id="number_accessibility" type="number" min="0" max="10" value="0">
            </div> <br>
            @endif


        </fieldset>
        <input type="hidden" name="Enterprise_id" value="{{$Enterprise_id}}">
        <button type="submit" class="btn">ENVOYER</button>
        
        {!! Form::close() !!}
    </div>
    
          @include('footer')
</body>
