<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sécutité</title>
</head>

<body>
<?php
$nom = isset($_POST['nom']) ? $_POST['nom'] : null;

?>
    <h2>Bonjour <?= isset($nom) ? $nom : "null" ?></h2> <!-- si nom existe alors tu affiche $nom sinon null  --->
    <form action="index.php" method="POST">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer">
    </form>




</body>

</html>