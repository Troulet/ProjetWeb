<?php
$stmt = $bdd->prepare("INSERT INTO localisation(Localisation) SELECT :localisation FROM DUAL WHERE NOT EXISTS (SELECT * FROM localisation WHERE Localisation = :localisation) AND user(Mail, Password, First_Name_User, Last_Name_User, id_Localisation) SELECT :mail, :passw, :fname, :lname, (SELECT id FROM localisation WHERE Localisation = :localisation) FROM DUAL WHERE NOT EXISTS (SELECT * FROM user WHERE Mail = :mail) AND pilot(id, Promotion, Mail, Password, First_Name_User, Last_Name_User, id_Localisation) SELECT (SELECT id FROM user WHERE Mail = :mail), :promotion, :mail, :passw, :fname, :lname, (SELECT id FROM Localisation WHERE Localisation = :localisation) FROM DUAL WHERE NOT EXISTS (SELECT * FROM pilot WHERE Mail = :mail)");

$localisation = htmlspecialchars($_POST["Localisation"]);
$mail = htmlspecialchars($_POST["Mail"]);
$passw = htmlspecialchars($_POST["Password"]);
$lname = htmlspecialchars($_POST["Last_Name"]);
$fname = htmlspecialchars($_POST["First_Name"]);
$promotion = htmlspecialchars($_POST["Promotion"]);

$data = [
    'localisation' => $localisation, //string
    'mail' => $mail, //string
    'passw' => $passw, //string
    'lname' => $lname, //string
    'fname' => $fname, //string
    'promotion' => $promotion, //string
];

if(!$stmt->execute($data)){
    echo "erreur<br/>";
}
else{
    echo "Insertion effectué !<br/>";
}

$stmt->closeCursor();
?>