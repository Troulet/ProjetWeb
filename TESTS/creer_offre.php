<?php
$stmt = $bdd->prepare("INSERT INTO localite(Localite) SELECT :localite FROM DUAL WHERE NOT EXISTS (SELECT * FROM localite WHERE Localite = :localite) AND stage(Description, Competences_Recherchees, Promotion, Duree_Stage, Gratification, Date_Offre, Nombre_Place_Offre, Contact, id_Entreprise, id_Localite) SELECT :description, :competences, :promotion, :duree, :gratification, :date, :places, :contact, (SELECT id FROM Entreprise WHERE Nom_Entreprise = :entreprise), (SELECT id FROM localite WHERE Localite = :localite) FROM DUAL WHERE NOT EXISTS (SELECT * FROM stage where Description = :description)");

$localite = htmlspecialchars($_POST["Localite"]);
$description = htmlspecialchars($_POST["Description"]);
$competences = htmlspecialchars($_POST["Competences"]);
$duree = htmlspecialchars($_POST["Duree"]);
$gratification = htmlspecialchars($_POST["Gratification"]);
$promotion = htmlspecialchars($_POST["Promotion"]);
$date = htmlspecialchars($_POST["Date"]);
$places = htmlspecialchars($_POST["Places"]);
$contact = htmlspecialchars($_POST["Contact"]);
$entreprise = htmlspecialchars($_POST["Entreprise"]);

$data[
    'localite' => $localite, //string
    'description' => $description, //string
    'competences' => $competences, //string
    'duree' => $duree, //string
    'gratification' => $gratification, //int
    'promotion' => $promotion, //string
    'date' => $date, //date
    'places' => $places, //int
    'contact' => $contact, //string
    'entreprise' => $entreprise, //string
];

if(!$stmt->execute($data)){
    echo "erreur<br/>";
}
else{
    echo "Insertion effectué !<br/>";
}

$stmt->closeCursor();
?>