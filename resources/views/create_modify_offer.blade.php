<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
    <div id="1">
       <div id="header">
        <div class="titre">
            <img class="logo2" src="../resources/img/logo_cesi2.0.png">
            <h1>LES P'TITES ANNONCES</h1>
            <h2>Cherche et trouve le stage qui te correspond !</h2>
        </div>
        </div>
    </div>
    <div>
        {!! Form::open(['url' => '/Offer', 'method' => 'post']) !!}
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
        <button type="submit" class="btn">CREER</button>

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
        <button type="submit" class="btn">MODIFIER</button>
        
        {!! Form::close() !!}
    </div>
    </script>
</body>
