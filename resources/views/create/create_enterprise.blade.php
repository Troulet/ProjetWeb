<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
   
    @include('.resources.views.header.blade.php') 

            {!! Form::open(['url' => '/Offer', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Offre</button>
            {!! Form::close() !!}

    <div>
        {!! Form::open(['url' => '/Enterprise_Create', 'method' => 'post']) !!}
        <fieldset>
            <legend>Créer une entreprise</legend>
     
            <label for="Enterprise_name">Nom de l'entreprise : </label>
            <input type="text" name="Enterprise_name" id="Enterprise_name" />
     
            <label for="Activity_sector">Secteur d'activité : </label>
            <input type="text" name="Activity_sector" id="Activity_sector" />

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation" id="Localisation" />

            <label for="Cesi_Student_Taken">Nombre d'étudiants CESI déjà pris : </label>
            <input type="text" name="Cesi_Student_Taken" id="Cesi_Student_Taken" />
      
        </fieldset>
        <button type="submit" id="btn_Create" class="btn_Create">CREER</button>

        <fieldset>
            <legend>Modifier une entreprise</legend>
     
            <label for="Enterprise_name">Nom de l'entreprise : </label>
            <input type="text" name="Enterprise_name" id="Enterprise_name" />
     
            <label for="Activity_sector">Secteur d'activité : </label>
            <input type="text" name="Activity_sector" id="Activity_sector" />

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation" id="Localisation" />

            <label for="Cesi_Student_Taken">Nombre d'étudiants CESI déjà pris : </label>
            <input type="text" name="Cesi_Student_Taken" id="Cesi_Student_Taken" />
      
        </fieldset>
        <button type="submit" id="btn_Modify" class="btn">MODIFIER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
          @include('.resources.views.footer.blade.php')
</body>
