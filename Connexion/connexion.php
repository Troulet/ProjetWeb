<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetweb', 'root', 'Tri27rou', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$stmt = $bdd->prepare("SELECT mail, Mot_de_passe FROM utilisateur WHERE mail = :mail AND Mot_de_passe = :mdp;");
$mail = htmlspecialchars($_POST["Login"]);
$mdp = htmlspecialchars($_POST["Mdp"]);

$stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
$stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);

if(!$stmt->execute()){
    echo 'erreur de requête';
}
else{
    $result = $stmt->fetch(PDO::FETCH_LAZY);

    if($result)
    {
        echo "yahou<br/>";
        echo $result['mail']." est bien connecté. Enjoy!<br/>";
    }
    else{
        echo "Vous n'êtes pas connectés. Veuillez réessayer.<br/>";
    }
}

$stmt->closecursor();
?>