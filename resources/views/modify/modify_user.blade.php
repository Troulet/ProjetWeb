<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<body>
    @include('header')
    <div id="1">
       <div id="header">
        <div class="titre">
            <img class="logo2" src="../resources/img/logo_cesi2.0.png" alt="logo2">
            <h1>LES P'TITES ANNONCES</h1>
            <h2>Cherche et trouve le stage qui te correspond !</h2>
        </div>
        </div>
    </div>
            {!! Form::open(['url' => '/Users', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Utilisateur</button>
            {!! Form::close() !!}
    <div>
            <button type="button" id="btn_Admin" class="btn">CREER UN PROFIL ADMINISTRATEUR</button>
            <button type="button" id="btn_Pilot" class="btn">CREER UN PROFIL PILOTE</button>
            <button type="button" id="btn_Student" class="btn">CREER UN PROFIL ETUDIANT</button>

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
            <input type="text" name="email" id="Email" />

            <label id="password_Label" for="Password">Mot de passe :  </label>
            <input type="text" name="password" id="Password" />

            <label id="Representative_Label" for="Representative">Délégué</label>
            <input type="checkbox" name="Representative" id="Representative" /> 
            
            <label id="Representative_Rights_Label" for="Representative_Rights">Droits :  </label>
            <input type="text" name="Representative_Rights" id="Representative_Rights" />
            <input type="hidden" name="UpUser_type" id="UpUser_type" />

        </fieldset>
        <button type="submit" id="btn_Create" class="btn_Create">CREER</button>

        </fieldset>
        <button type="submit" id="btn_Modify" class="btn_Modify">MODIFIER</button>
        
        {!! Form::close() !!}
    </div>
    <div id="result"></div>
    <script type="text/javascript">

    var StudentTable = ['First_Name', 'Last_Name', 'Localisation_Name', 'Promotion', 'Email', 'Password', 'Representative', 'Representative_Rights', "First_Label", 'Last_Label', 'Localisation_Label', 'Promotion_Label', 'email_Label', 'password_Label', 'Representative_Label', 'Representative_Rights_Label'];
    var PilotTable = ['First_Name', 'Last_Name', 'Localisation_Name', 'Promotion', 'Email', 'Password', "First_Label", 'Last_Label', 'Localisation_Label', 'Promotion_Label', 'email_Label', 'password_Label'];
    var AdminTable = ['First_Name', 'Last_Name', 'Localisation_Name', 'Email', 'Password', "First_Label", 'Last_Label', 'Localisation_Label', 'email_Label', 'password_Label'];
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
            if( xhr.status == 200)
            {
                document.getElementById("js_result").innerHTML = xhr.ResponseText;
            }
        }
		xhr.send("UpUser_type="+UpUser_type+"&First_Name="+First_Name+"&Last_Name"+Last_Name+"&Localisation_Name="+Localisation_Name+"&Promotion="+Promotion+"&email="+email+"&password="+password+"&Representative="+Representative+"&Representative_Rights="+Representative_Rights)
    }

    document.getElementById("btn_Create").onclick = function(){
        AJAXPOST();
    }

    </script>
        @include('footer')
</body>
</html>
