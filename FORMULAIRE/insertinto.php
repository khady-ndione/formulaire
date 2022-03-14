<?php
$link = mysqli_connect("localhost", "root", "", "formulaire");
// Vérifiez connexion
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO inscription (id, first_name, last_name, date_of_born, place_of_born, email, formation )
 VALUES ('$first_name', '$last_name', '$date_of_born', '$place_of_born' ,'$email', '$formation')";
if(mysqli_query($link, $sql)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
