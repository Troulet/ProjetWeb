<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<link rel= "stylesheet" href="../resources/views/modify/modify.css"/>
<body>
   
    @include('header')

            {!! Form::open(['url' => '/Offer', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Offre</button>
            {!! Form::close() !!}
    <div>
        {!! Form::open(['url' => '/Enterprise_Update', 'method' => 'post']) !!}

        <fieldset>

            <legend>Modifier une entreprise</legend>

            <input type='hidden' name="Enterprise_id" value="{{$dataEnterprise['id']}}">
            
            <label for="Enterprise_Name">Nom de l'entreprise : </label>
            <input type="text" name="Enterprise_Name" id="Enterprise_Name" value="{{$dataEnterprise['Enterprise_Name']}}"/>
     
            <label for="Activity_Sector">Secteur d'activité : </label>
            <input type="text" name="Activity_Sector" id="Activity_Sector" value="{{$dataEnterprise['Activity_Sector']}}"/>

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation_Name" id="Localisation" value="{{$dataEnterprise['Localisation_Name']}}"/>

            <label for="Cesi_Student_Taken">Nombre d'étudiants CESI déjà pris : </label>
            <input type="text" name="Cesi_Student_Taken" id="Cesi_Student_Taken" value="{{$dataEnterprise['Cesi_Student_Taken']}}"/>
      
        </fieldset>
        <button type="submit" id="btn_Modify" class="btn_Modify">MODIFIER</button>
        {!! Form::close() !!}
    </div>
   
    </script>
          @include('footer')
</body>
