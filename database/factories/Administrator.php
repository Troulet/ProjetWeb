<?php
class Administrator{
    public function create(){
        $stmt = $bdd->prepare("INSERT INTO localisation(Localisation) SELECT :localisation FROM DUAL WHERE NOT EXISTS (SELECT * FROM localisation WHERE Localisation = :localisation) AND user(Mail, Password, First_Name_User, Last_Name_User, id_Localisation) SELECT :mail, :passw, :fname, :lname, (SELECT id FROM localisation WHERE Localisation = :localisation) FROM DUAL WHERE NOT EXISTS (SELECT * FROM user WHERE Mail = :mail) AND administrator(id, Mail, Password, First_Name_User, Last_Name_User, id_Localisation) SELECT (SELECT id FROM user WHERE Mail = :mail), :mail, :passw, :fname, :lname, (SELECT id FROM Localisation WHERE Localisation = :localisation) FROM DUAL WHERE NOT EXISTS (SELECT * FROM administrator WHERE Mail = :mail)");

        $Localisation = htmlspecialchars($_POST["Localisation"]);
        $mail = htmlspecialchars($_POST["Mail"]);
        $passw = htmlspecialchars($_POST["Password"]);
        $lname = htmlspecialchars($_POST["Last_Name"]);
        $fname = htmlspecialchars($_POST["First_Name"]);

        $data = [
            'Localisation' => $Localisation, //string
            'mail' => $mail, //string
            'passw' => $passw, //string
            'lname' => $lname, //string
            'fname' => $fname, //string
        ];
    }
}