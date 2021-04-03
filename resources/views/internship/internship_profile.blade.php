<!DOCTYPE html>
<html>
    <head>
        <meta charsert="utf-8" />
        <link rel= "stylesheet" href="../resources/views/internship/internship_student.css"/>
        <link rel= "stylesheet" href="../resources/views/header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        
        @include('header')
    </br>
        <div class="profil_offer">



        </div>
    <!--Caroussel-->
    <!-- Carousel wrapper -->


      <!--bouton du pop-up-->
      <button class="postuler" type="button">POSTULER</button><br>
      <button class="wish_list" type="button">AJOUTER A LA WISH-LIST</button><br>
      <button class="eval" type="button">EVALUER LE PROFIL</button><br>
      <button class="suppr" type="button">SUPPRIMER LE PROFIL</button><br>
      <button class="modif" type="button">MODIFIER LE PROFIL</button><br>
      <button class="contacter" type="button">CONTACTER L'ENTREPRISE</button>
      
  </section>
    @include('footer')
</body>
    
</html>
