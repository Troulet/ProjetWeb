<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>
<link rel= "stylesheet" href="../resources/views/modify/modify.css"/>
<body>
    @include('header')
    
            {!! Form::open(['url' => '/Users', 'method' => 'get']) !!}
            <button type="submit" class="btn">Retour à la page Utilisateur</button>
            {!! Form::close() !!}
    <div>
        {!! Form::open(['url' => '/Users_Update', 'method' => 'post']) !!}

        <fieldset>

            <legend>Modifier un élève</legend>

            <input type='hidden' name="Users_id" value="{{$dataUser['Users_id']}}">
            <input type='hidden' name="UpUser_type" value="{{$UpUser_type}}"> <br>

            <label id="First_Label" for="First_Name">Prénom de l'élève : </label>
            <input type="text" name="First_Name" id="First_Name" value="{{$dataUser['First_Name']}}"/> <br>
     
            <label id="Last_Label" for="Last_Name">Nom de l'élève : </label>
            <input type="text" name="Last_Name" id="Last_Name" value="{{$dataUser['Last_name']}}"/> <br>

            <label id="Localisation_Label" for="Localisation">Localité : </label>
            <input type="text" name="Localisation_Name" id="Localisation_Name" value="{{$dataUser['Localisation_Name']}}"/> <br>

            <label id="email_Label" for="Email">Email :  </label>
            <input type="text" name="email" id="Email" value="{{$dataUser['email']}}"/> <br>


            @if($UpUser_type == 0 || $UpUser_type == 1)
                <label id="Promotion_Label" for="Promotion">Promotion :  </label>
                <input type="text" name="Promotion" id="Promotion" value="{{$dataUser['Promotion']}}"/> <br>

                @if($UpUser_type == 0 && $UpUser_type != 1)
                <label id="Representative_Label" for="Representative">Délégué</label>
                <input type="checkbox" name="Representative" id="Representative" value="{{$dataUser['Representative']}}" /> <br>
            
                <label id="Representative_Rights_Label" for="Representative_Rights">Droits :  </label>
                <input type="text" name="Representative_Rights" id="Representative_Rights" value="{{$dataUser['Representative_Rights']}}"/> 
                <input type="hidden" name="UpUser_type" id="UpUser_type" /> <br>
                @endif
            @endif

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
        if(UpUser_type = 0)
        {
            showStudentCreation();
        }
        elseif (UpUser_type = 1)
        {
            showPilotCreation();
        }
        elseif (UpUser_type = 2)
        {
            showAdminCreation();
        }
    }

    /*function AJAXPOST(){
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
    }*/

    </script>
        @include('footer')
</body>
</html>
