<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<link rel= "stylesheet" href="../resources/views/create/create_user.css"/>
<body>
    
    @include('header') 
    
   
    <div>
        {!! Form::open(['url' => '/Offer_Create', 'method' => 'post']) !!}
        <fieldset>
            <legend>Créer une offre</legend> <br>
     
            <label>Nom de l'entreprise : {{$Enterprise_Name}}</label> <br>
     
            <label for="Promotion_researched">Promotion visée : </label>
            <input type="text" name="Promotion_researched" id="Promotion_researched" /> <br>

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation_Name" id="Localisation_Name" /> <br>

            <label for="Skills_researched">Compétences recherchées :  </label>
            <input type="text" name="Skills_researched" id="Skills_researched" /> <br>
      
            <label for="Duration">Durée :  </label>
            <input type="text" name="Internship_Duration" id="Internship_Duration" /> <br>

            <label for="Salary">Gratification :  </label>
            <input type="text" name="Salary" id="Salary" /> <br>

            <label for="Contact">Contact :  </label>
            <input type="text" name="Contact" id="Contact" /> <br>

            <label for="Number_of_Places">Nombre de places :  </label>
            <input type="text" name="Number_Of_Places" id="Number_Of_Places" /> <br>

            <label for="Description">Description :  </label>
            <input type="text" name="Description" id="Description" /> <br>

        </fieldset>
        <input type="hidden" name="Enterprise_id" value="{{$Enterprise_id}}">
        <button type="submit" id="btn_Create" class="btn_Create">CREER</button>
        {!! Form::close() !!}
    </div>
    </script>
       @include('footer')
</body>
