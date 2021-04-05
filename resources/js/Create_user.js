
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
