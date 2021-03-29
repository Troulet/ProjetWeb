<?php
class Student{
    public function create(){
        $stmt = $bdd->prepare("INSERT INTO localisation(Localisation) SELECT :localisation FROM DUAL WHERE NOT EXISTS (SELECT * FROM localisation WHERE Localisation = :localisation) AND user(Mail, Password, First_Name_User, Last_Name_User, id_Localisation) SELECT :mail, :passw, :fname, :lname, (SELECT id FROM localisation WHERE Localisation = :localisation) FROM DUAL WHERE NOT EXISTS (SELECT * FROM user WHERE Mail = :mail) AND student(id, Promotion, Representative, Representative_right, Mail, Password, Last_Name_User, First_Name_User, id_Localisation) SELECT (SELECT id FROM user WHERE Mail = :mail), :promotion, :representative, :rrights, :mail, :passw, :lname, :fname, (SELECT id FROM Localisation WHERE Localisation = :localisation) FROM DUAL WHERE NOT EXISTS (SELECT * FROM student WHERE Mail = :mail)");

        $localisation = htmlspecialchars($_POST["Localisation"]);
        $mail = htmlspecialchars($_POST["Mail"]);
        $passw = htmlspecialchars($_POST["Password"]);
        $lname = htmlspecialchars($_POST["Last_Name"]);
        $fname = htmlspecialchars($_POST["First_Name"]);
        $promotion = htmlspecialchars($_POST["Promotion"]);
        $representative = htmlspecialchars($_POST["Representative"]);
        $rrights = htmlspecialchars($_POST["Representative_Rights"]);

        $data = [
            'localisation' => $localisation, //string
            'mail' => $mail, //string
            'passw' => $passw, //string
            'lname' => $lname, //string
            'fname' => $fname, //string
            'promotion' => $promotion, //string
            'representative' => $representative, //bool
            'rrights' => $rrights, //string
        ];
    }
}