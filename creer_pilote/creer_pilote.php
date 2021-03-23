<?php
$stmt = $bdd->prepare("INSERT INTO localite(Localite) VALUES (:localite) AND utilisateur(Mail, Mot_de_passe, Nom_User, Prenom_User, id_Localite) VALUES (:mail, :mdp, :nom, :prenom, (SELECT id FROM localite WHERE Localite = :localite)) AND pilote(id_Utilisateur, Promotion, Fiche_Validation, Mail, Mot_de_passe, Nom_User, Prenom_User, id_Utilisateur_Administrateur, id_Administrateur, id_Localite) VALUES ((SELECT id FROM utilisateur WHERE Mot_de_passe = :mdp AND Mail = :mail AND Nom_user = :nom AND Prenom_user = :prenom), :promotion, :fiche, :mail, :mdp, :nom, :prenom, (SELECT id_Utilisateur FROM administrateur WHERE ), (SELECT id FROM administrateur WHERE ), (SELECT id FROM Localite WHERE Localite = :localite))");

$localite = htmlspecialchars($_POST["Localite"]);
$mail = htmlspecialchars($_POST["Mail"]);
$mdp = htmlspecialchars($_POST["Mdp"]);
$nom = htmlspecialchars($_POST["Nom"]);
$prenom = htmlspecialchars($_POST["Prenom"]);
$promotion = htmlspecialchars($_POST["Promotion"]);
$fiche = htmlspecialchars($_POST["Fiche"]);

$data[
    'localite' => $localite, //string
    'mail' => $mail, //string
    'mdp' => $mdp, //string
    'nom' => $nom, //string
    'prenom' => $prenom, //string
    'promotion' => $promotion, //string
    'fiche' => $fiche, //fichier .pdf ici de base null
];

if(!$stmt->execute($data)){
    echo "erreur<br/>";
}
else{
    echo "Insertion effectué !<br/>";
}

$stmt->closeCursor();
?>