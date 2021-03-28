<?php
$stmt = $bdd->prepare("INSERT INTO enterprise(Enterprise_Name, Contact, Activity_Sector) SELECT :name, :contact, :sector FROM DUAL WHERE NOT EXISTS (SELECT * FROM enterprise WHERE Enterprise_Name = :name)");

$name = htmlspecialchars($_POST["name"]);
$contact = htmlspecialchars($_POST["Contact"]);
$sector = htmlspecialchars($_POST["sector"]);

$data = [
    'name' => $name, //string
    'contact' => $contact, //string
    'sector' => $sector, //string
];

if(!$stmt->execute($data)){
    echo "erreur<br/>";
}
else{
    echo "Insertion effectué !<br/>";
}

$stmt->closeCursor();
?>