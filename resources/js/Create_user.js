
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

    /*function AJAXPOST(){
        var xhr = new XMLHttpRequest();
	    xhr.open("POST", "http://cesijob.fr/Public/Users_Create", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onload = function(){
            if(xhr.status == 200 && xhr.readyState === XMLHttpRequest.DONE)
            {
                callback(xhr.ResponseText);
                var response = JSON.Parse(xhr.ResponseText);
                document.getElementById("result").innerHTML = response.data;
            }
        }
		xhr.send("_token=".document.getElementsByName("_token")+"$UpUser_type="+document.getElementById("UpUser_type").value+"&First_Name="+document.getElementById("First_Name").value+"&Last_Name="+document.getElementById("Last_Name").value+"&Localisation_Name="+document.getElementById("Localisation_Name").value+"&Promotion="+document.getElementById("Promotion").value+"&email="+document.getElementById("email").value+"&password="+document.getElementById("password").value+"&Representative="+document.getElementById("Representative").value+"&Representative_Rights="+document.getElementById("Representative_Rights").value)
    }

    document.getElementById("btn_Create").onclick = function(){
        AJAXPOST();
    };*/
