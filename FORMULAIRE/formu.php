<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Formulaire d'ajout d'enregistrements</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<form action="insert.php" method="post">
	<p>
    	<label for="firstName">Prénom:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
    	<label for="lastName">Nom de famille:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
    	<label for="dateofborn">Date de naissance:</label>
        <input type="date" name="date_of_born" id="dateofborn">
    </p>
    <p>
    	<label for="placeofborn">Lieu de naissance:</label>
        <input type="text" name="place_of_born" id="placeofborn">
    </p>
    <p>
    	<label for="emailAddress">Email:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <p>
    	<label for="formation">Formation:</label>
        <input type="radio" name="formation" id="formation" value="Infographie">Infographie
        <input type="radio" name="formation" id="formation" value="Infographie">Developpement Web
        <input type="radio" name="formation" id="formation" value="Infographie">Transformation

    </p>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>