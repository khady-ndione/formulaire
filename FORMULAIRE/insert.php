<?php
/* Tenter une connexion au serveur MySQL. En supposant que vous exécutez le serveur MySQL
avec les paramètres par défaut (utilisateur 'root' sans mot de passe).  */
$link = mysqli_connect("localhost", "root", "", "formulaire");
 
// Vérifiez connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
 
// Échapper aux entrées utilisateur pour la sécurité
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$date_of_born = mysqli_real_escape_string($link, $_REQUEST['date_of_born']);
$place_of_born = mysqli_real_escape_string($link, $_REQUEST['place_of_born']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$formation = mysqli_real_escape_string($link, $_REQUEST['formation']);
// Tentative d'exécution de la requête d'insertion
$sql = "INSERT INTO inscription (first_name, last_name, date_of_born, place_of_born, email, formation) 
VALUES ('$first_name', '$last_name', '$date_of_born','$place_of_born','$email','$formation')";
if(mysqli_query ($link, $sql)){
    echo "Enregistrements ajoutés avec succès.";
} else{
    echo "ERREUR : Impossible d'exécuter $sql. " . mysqli_error($link);
}
 
// Fermer la connexion
mysqli_close($link);
?>

<!--boutton de retour-->
<form action="formu.php" method="post">
    <input type="submit" value="Retour">
</form>
<!--boutton d'affichage de tableau-->
    <form action="T.php" method="post">
    <input type="submit" value="Affiche">
    </form>
