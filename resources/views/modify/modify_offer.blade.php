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
        {!! Form::open(['url' => '/Offer_Update', 'method' => 'post']) !!}

        <fieldset>
            <legend>Modifier une offre</legend>

            <input type='hidden' name="Internship_id" value="{{$dataOffer['id']}}">
     
            <label>Nom de l'entreprise : {{$dataOffer['Enterprise_Name']}}</label>

            <label for="Description">Description : </label>
            <input type="text" name="Description" id="Description" value="{{$dataOffer['Description']}}"/>
     
            <label for="Promotion_researched">Promotion visée : </label>
            <input type="text" name="Promotion_researched" id="Promotion_researched" value="{{$dataOffer['Promotion_researched']}}"/>

            <label for="Localisation">Localité : </label>
            <input type="text" name="Localisation_Name" id="Localisation" value="{{$dataOffer['Localisation_Name']}}"/>

            <label for="Skills_researched">Compétences recherchées : </label>
            <input type="text" name="Skills_researched" id="Skills_researched" value="{{$dataOffer['Skills_researched']}}"/>
      
            <label for="Duration">Durée : </label>
            <input type="text" name="Internship_Duration" id="Duration" value="{{$dataOffer['Internship_Duration']}}"/>

            <label for="Salary">Gratification : </label>
            <input type="text" name="Salary" id="Salary" value="{{$dataOffer['Salary']}}"/>

            <label for="Contact">Contact : </label>
            <input type="text" name="Contact" id="Contact" value="{{$dataOffer['Contact']}}"/>

            <label for="Number_Of_Places">Nombre de places : </label>
            <input type="text" name="Number_Of_Places" id="Number_Of_Places" value="{{$dataOffer['Number_Of_Places']}}"/>

        </fieldset>
        <button type="submit" id="btn_Create" class="btn_Create">MODIFIER</button>
        {!! Form::close() !!}
    </div>
    </script>
       @include('footer')
</body>
