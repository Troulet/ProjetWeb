<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
    
    @include('.resources.views.header.blade.php') 
    
   
    <div>
        {!! Form::open(['url' => '/Offer_Create', 'method' => 'post']) !!}
        <fieldset>
            <legend>Créer une offre</legend>
     
            <label for="Enterprise_name">Nom de l'entreprise : </label>
            <input type="text" name="Enterprise_name" id="Enterprise_name" />
     
            <label for="Promotion_researched">Promotion visée : </label>
            <input type="text" name="Promotion_researched" id="Promotion_researched" />

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation" id="Localisation" />

            <label for="Skills_researched">Compétences recherchées :  </label>
            <input type="text" name="Skills_researched" id="Skills_researched" />
      
            <label for="Duration">Durée :  </label>
            <input type="text" name="Duration" id="Duration" />

            <label for="Salary">Gratification :  </label>
            <input type="text" name="Salary" id="Salary" />

            <label for="Offer_date">Date de l'offre :  </label>
            <input type="text" name="Offer_date" id="Offer_date" />

            <label for="Contact">Contact :  </label>
            <input type="text" name="Contact" id="Contact" />

            <label for="Number_of_places">Nombre de places :  </label>
            <input type="text" name="Number_of_places" id="Number_of_places" />

        </fieldset>
        <button type="submit" id="btn_Create" class="btn_Create">CREER</button>

        <fieldset>
            <legend>Modifier une offre</legend>
     
            <label for="Enterprise_name">Nom de l'entreprise : </label>
            <input type="text" name="Enterprise_name" id="Enterprise_name" />
     
            <label for="Promotion_researched">Promotion visée : </label>
            <input type="text" name="Promotion_researched" id="Promotion_researched" />

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation" id="Localisation" />

            <label for="Skills_researched">Compétences recherchées :  </label>
            <input type="text" name="Skills_researched" id="Skills_researched" />
      
            <label for="Duration">Durée :  </label>
            <input type="text" name="Duration" id="Duration" />

            <label for="Salary">Gratification :  </label>
            <input type="text" name="Salary" id="Salary" />

            <label for="Offer_date">Date de l'offre :  </label>
            <input type="text" name="Offer_date" id="Offer_date" />

            <label for="Contact">Contact :  </label>
            <input type="text" name="Contact" id="Contact" />

            <label for="Number_of_places">Nombre de places :  </label>
            <input type="text" name="Number_of_places" id="Number_of_places" />
      
        </fieldset>
        <button type="submit" id="btn_Modify" class="btn">MODIFIER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
       @include('.resources.views.footer.blade.php') 
</body>
