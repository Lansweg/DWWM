<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATES</title>
</head>
<body>
<form action="index.php" method="post">
    <p>Date de naissance :  </p>
    <label for="date">Date de naissance</label>
    <input type="date" name="date">
    <input type="submit" value="Envoyer">
</form>    
<?php
if (isset($_POST['date'])) {
    echo "La date de naissance est : " . $_POST['date'];
} else {
    echo "Aucune date de naissance";
}

?>

</body>
</html>