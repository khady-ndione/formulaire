<link rel="stylesheet" type="text/css" href="style.css">
<!-- <form action="traitement.php" method="post"></form> -->

<?php

$link = mysqli_connect("localhost", "root", "", "formulaire");
 
// Vérifiez connexion
if($link === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

// Tentative d'exécution de la requête de selection
$sql = "SELECT * FROM inscription";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo"<table>";
        echo"<tr>";
        echo"<th>first_name</th>";
        echo"<th>last_name</th>";
        echo"<th>date_of_born</th>";
        echo"<th>place_of_born</th>";
        echo"<th>email</th>";
        echo"<th>formation</th>";
        echo"</tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo"<tr>";
echo"<td>".$row['first_name']."</td>";
echo"<td>".$row['last_name']."</td>";
echo"<td>".$row['date_of_born']."</td>";
echo"<td>".$row['place_of_born']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['formation']."</td>";
echo"</tr>";
        }

        echo"</table>";

        // libere le jeu de result
mysqli_free_result($result);

} else{
    echo "Aucun enregistrement correspondant à votre requete n'a ete trouver.";
}

} else {
    echo"ERREUR: Impossible d'executer $sql." .mysqli_error($link);
}
// Close connexion
mysqli_close($link);

?>

