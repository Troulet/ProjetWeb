<?php
$stmt = $bdd->prepare("INSERT INTO localite(Localite) SELECT :localite FROM DUAL WHERE NOT EXISTS (SELECT * FROM localite WHERE Localite = :localite) AND utilisateur(Mail, Mot_de_passe, Nom_User, Prenom_User, id_Localite) SELECT :mail, :mdp, :nom, :prenom, (SELECT id FROM localite WHERE Localite = :localite) FROM DUAL WHERE NOT EXISTS (SELECT * FROM utilisateur WHERE Mail = :mail) AND administrateur(id_Utilisateur, Mail, Mot_de_passe, Nom_User, Prenom_User, id_Localite) SELECT (SELECT id FROM utilisateur WHERE Mot_de_passe = :mdp AND Mail = :mail AND Nom_user = :nom AND Prenom_user = :prenom), :mail, :mdp, :nom, :prenom, (SELECT id FROM localite WHERE Localite = :localite) FROM DUAL WHERE NOT EXISTS (SELECT * FROM administrateur WHERE Mail = :mail)");

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