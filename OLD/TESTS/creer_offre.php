<?php
$stmt = $bdd->prepare("INSERT INTO localisation(Localisation) SELECT :localisation FROM DUAL WHERE NOT EXISTS (SELECT * FROM localisation WHERE Localisation = :localisation) AND internship(Description, Skills_researched, Promotion_researched, Duree_Stage, Salary, Offer_date, Number_of_places, Contact, id_Enterprise, id_Localisation) SELECT :description, :skills, :promotion, :duree, :salary, :date, :places, :contact, (SELECT id FROM Entreprise WHERE Nom_Entreprise = :enterprise), (SELECT id FROM localisation WHERE Localisation = :localisation) FROM DUAL WHERE NOT EXISTS (SELECT * FROM internship where Description = :description)");

$localisation = htmlspecialchars($_POST["Localisation"]);
$description = htmlspecialchars($_POST["Description"]);
$skills = htmlspecialchars($_POST["Skills"]);
$duree = htmlspecialchars($_POST["Duree"]);
$salary = htmlspecialchars($_POST["Salary"]);
$promotion = htmlspecialchars($_POST["Promotion"]);
$date = htmlspecialchars($_POST["Date"]);
$places = htmlspecialchars($_POST["Places"]);
$contact = htmlspecialchars($_POST["Contact"]);
$enterprise = htmlspecialchars($_POST["Enterprise"]);

$data = [
    'localisation' => $localisation, //string
    'description' => $description, //string
    'skills' => $skills, //string
    'duree' => $duree, //string
    'salary' => $salary, //int
    'promotion' => $promotion, //string
    'date' => $date, //date
    'places' => $places, //int
    'contact' => $contact, //string
    'enterprise' => $enterprise, //string
];

if(!$stmt->execute($data)){
    echo "erreur<br/>";
}
else{
    echo "Insertion effectué !<br/>";
}

$stmt->closeCursor();
?>