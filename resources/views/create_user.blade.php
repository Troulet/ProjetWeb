<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
    <?php 
          include("../resources/views/header.blade.php"); 
    ?>
    <div id="1">
       <div id="header">
        <div class="titre">
            <img class="logo2" src="../resources/img/logo_cesi2.0.png">
            <h1>LES P'TITES ANNONCES</h1>
            <h2>Cherche et trouve le stage qui te correspond !</h2>
        </div>
        </div>
    </div>
            {!! Form::open(['url' => '/Users', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Utilisateur</button>
            {!! Form::close() !!}
    <div>
            <button type="btn" id="btn_Admin" class="btn">CREER UN PROFIL ADMINISTRATEUR</button>
            <button type="btn" id="btn_Pilot" class="btn">CREER UN PROFIL PILOTE</button>
            <button type="btn" id="btn_Student" class="btn">CREER UN PROFIL ETUDIANT</button>

        {!! Form::open(['url' => '/Users_Create', 'method' => 'post']) !!}

        <fieldset>

            <legend>Créer un élève</legend>

            

            <label id="First_Label" for="First_Name">Prénom de l'élève : </label>
            <input type="text" name="First_Name" id="First_Name" />
     
            <label id="Last_Label" for="Last_Name">Nom de l'élève : </label>
            <input type="text" name="Last_Name" id="Last_Name" />

            <label id="Localisation_Label" for="Localisation">Localité : </label>
            <input type="text" name="Localisation_Name" id="Localisation_Name" />

            <label id="Promotion_Label" for="Promotion">Promotion :  </label>
            <input type="text" name="Promotion" id="Promotion" />
      
            <label id="email_Label" for="Email">Email :  </label>
            <input type="text" name="email" id="email" />

            <label id="password_Label" for="Password">Mot de passe :  </label>
            <input type="text" name="password" id="password" />

            <label id="Representative_Label" for="Representative">Délégué</label>
            <input type="radio" name="Representative" id="Representative" text="Oui" value="1"/>
            <input type="radio" name="Representative" id="Representative2" text="Non" value="0"/>
            
            <label id="Representative_Rights_Label" for="Representative_Rights">Droits :  </label>
            <input type="text" name="Representative_Rights" id="Representative_Rights" value="0"/>
            <input type="hidden" name="UpUser_type" id="UpUser_type" />

        </fieldset>
        <button type="button" id="btn_Create" class="btn_Create">CREER</button>

        </fieldset>
        <button type="submit" id="btn_Modify" class="btn_Modify">MODIFIER</button>
        
        {!! Form::close() !!}
    </div>
    <div id="result"></div>
    <script type="text/javascript">

    var StudentTable = ['First_Name', 'Last_Name', 'Localisation_Name', 'Promotion', 'email', 'password', 'Representative', 'Representative2', 'Representative_Rights', "First_Label", 'Last_Label', 'Localisation_Label', 'Promotion_Label', 'email_Label', 'password_Label', 'Representative_Label', 'Representative_Rights_Label'];
    var PilotTable = ['First_Name', 'Last_Name', 'Localisation_Name', 'Promotion', 'email', 'password', "First_Label", 'Last_Label', 'Localisation_Label', 'Promotion_Label', 'email_Label', 'password_Label'];
    var AdminTable = ['First_Name', 'Last_Name', 'Localisation_Name', 'email', 'password', "First_Label", 'Last_Label', 'Localisation_Label', 'email_Label', 'password_Label'];
    function showStudentCreation()
    {
        document.getElementById("UpUser_type").value = 0;
        StudentTable.forEach(Showing);
        function Showing(item, index) {
        document.getElementById(item).style.display='block'
        }
    }

    function showPilotCreation()
    {
        document.getElementById("UpUser_type").value = 1;
        StudentTable.forEach(Shadowing);
        function Shadowing(item, index) {
        document.getElementById(item).style.display='none'
        }

        PilotTable.forEach(Showing);
        function Showing(item, index) {
        document.getElementById(item).style.display='block'
        }
    }

    function showAdminCreation()
    {
        document.getElementById("UpUser_type").value = 2;
        StudentTable.forEach(Shadowing);
        function Shadowing(item, index) {
        document.getElementById(item).style.display='none'
        }

        AdminTable.forEach(Showing);
        function Showing(item, index) {
        document.getElementById(item).style.display='block'
        }
    }

    document.onload = function()
    {
        showStudentCreation();
    }

    document.getElementById("btn_Admin").onclick = function(){
        showAdminCreation();
    }

    document.getElementById("btn_Pilot").onclick = function(){
        showPilotCreation();
    }

    document.getElementById("btn_Student").onclick = function(){
        showStudentCreation();
    }

    function AJAXPOST(){
        var xhr = new XMLHttpRequest();
	    xhr.open("POST", "http://localhost/Public/Users_Create", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onload = function(){
            if(xhr.status == 200 && xhr.readyState === XMLHttpRequest.DONE)
            {
                callback(xhr.ResponseText);
                var response = JSON.Parse(xhr.ResponseText);
                document.getElementById("result").innerHTML = response.data;
            }
        }
		xhr.send("_token=".document.getElementsByName("_token").value+"$UpUser_type="+document.getElementById("UpUser_type").value+"&First_Name="+document.getElementById("First_Name").value+"&Last_Name="+document.getElementById("Last_Name").value+"&Localisation_Name="+document.getElementById("Localisation_Name").value+"&Promotion="+document.getElementById("Promotion").value+"&email="+document.getElementById("email").value+"&password="+document.getElementById("password").value+"&Representative="+document.getElementById("Representative").value+"&Representative_Rights="+document.getElementById("Representative_Rights").value)
    }

    document.getElementById("btn_Create").onclick = function(){
        AJAXPOST();
    };

    </script>
    <?php 
          include("../resources/views/footer.blade.php"); 
    ?>
</body>
