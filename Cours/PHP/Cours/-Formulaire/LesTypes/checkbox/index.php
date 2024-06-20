<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
</head>

<body>
    <form action="index.php" method="post">
        <p>Intérêt</p>
        <input type="checkbox" name="interet[]" value="musique" checked>
        <label for="music">Musique</label>
        <input type="checkbox" name="interet[]" value="voyages">
        <label for="voyages">Voyages</label>
        <input type="checkbox" name="interet[]" value="lecture">
        <label for="lecture">Lecture</label>
        <input type="checkbox" name="interet[]" value="cinéma" checked>
        <label for="cinéma">Cinéma</label>
        <input type="submit" value"Envoyer">
    </form>

    <?php
    if (isset($_POST['interet']) && is_array(($_POST['interet']))) {
        $interets = $_POST['interet'];
        print_r($_POST);
        foreach ($interets as $interet) {
            echo $interet . "<br>";
        }
    } else {
        echo 'Aucun intérêt sélectionné';
    }



    ?>

</body>

</html>