<?php
$stmt = $bdd->prepare("INSERT INTO localite(Localite) VALUES (:localite) AND utilisateur(Mail, Mot_de_passe, Nom_User, Prenom_User, id_Localite) VALUES (:mail, :mdp, :nom, :prenom, (SELECT id FROM localite WHERE Localite = :localite)) AND administrateur(id_Utilisateur, Mail, Mot_de_passe, Nom_User, Prenom_User, id_Localite) VALUES ((SELECT id FROM utilisateur WHERE Mot_de_passe = :mdp AND Mail = :mail AND Nom_user = :nom AND Prenom_user = :prenom), :mail, :mdp, :nom, :prenom, (SELECT id FROM localite WHERE Localite = :localite))");

$localite = htmlspecialchars($_POST["Localite"]);
$mail = htmlspecialchars($_POST["Mail"]);
$mdp = htmlspecialchars($_POST["Mdp"]);
$nom = htmlspecialchars($_POST["Nom"]);
$prenom = htmlspecialchars($_POST["Prenom"]);

$data[
    'localite' => $localite, //string
    'mail' => $mail, //string
    'mdp' => $mdp, //string
    'nom' => $nom, //string
    'prenom' => $prenom, //string
];

if(!$stmt->execute($data)){
    echo "erreur<br/>";
}
else{
    echo "Insertion effectué !<br/>";
}

$stmt->closeCursor();
?>