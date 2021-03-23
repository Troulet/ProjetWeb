<?php
$stmt = $bdd->prepare("INSERT INTO entreprise(Nom_Entreprise, Contact, Secteur_Activite) SELECT :nom, :contact, :secteur FROM DUAL WHERE NOT EXISTS (SELECT * FROM entreprise WHERE Nom_Entreprise = :nom)");

$nom = htmlspecialchars($_POST["Nom"]);
$contact = htmlspecialchars($_POST["Contact"]);
$secteur = htmlspecialchars($_POST["Secteur"]);

$data[
    'nom' => $nom, //string
    'contact' => $contact, //string
    'secteur' => $secteur, //string
];

if(!$stmt->execute($data)){
    echo "erreur<br/>";
}
else{
    echo "Insertion effectué !<br/>";
}

$stmt->closeCursor();
?>