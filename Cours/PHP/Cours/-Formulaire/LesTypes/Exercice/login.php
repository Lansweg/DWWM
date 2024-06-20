<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="form">
<?php
$nomprenom = isset($nomprenom) ? $nomprenom : "";
$email = isset($email) ? $email : "";
$pass = isset($pass) ? $pass : "";
$pass2 = isset($pass2) ? $pass2 : "";
$date = isset($date) ? $date : "";
$sexe = isset($sexe) ? $sexe : "";

// VERIFICATION NOM PRENOM
if(isset($_POST['nomprenom'])){
    $nomprenom = filter_input(INPUT_POST, 'nomprenom', FILTER_SANITIZE_SPECIAL_CHARS);
    if($nomprenom){
        echo "<p>Nom & prénom : </p>" . $nomprenom . "</br>";
    }else{
        echo "<p>Carracère hors caractères spéciaux</p>";
    }
}  
// VERIFICATION EMAIL

$email = "";
if(isset($_POST['email'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if($email){
        echo "<p>Email valide</p>";
    }else{
        echo "<p>Email invalide</p>";
    }
}   
 
// VERIFICATION MOT DE PASSE 
if (isset($_POST['pass']) && isset($_POST['pass2'])) {
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    if ($pass === "" || $pass2 === "") {
        echo "<p>Champ incorrect</p>";
    } else if ($pass === $pass2) {
        if (strlen($pass) <= 8) {
            echo "<p>Les mots de passe correspondent et ont moins de 8 caractères.</p>";
        } else {
            echo "<p>Mots de passe OK ! </p>";
        }
    } else {
        echo "<p>Champ incorrect Les mots de passe ne correspondent pas.</p>";
    }
}
// VERIFICATION DATE
if (isset($_POST['date'])) {
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_NUMBER_FLOAT);
    echo "<p>La date de naissance est : </p>" . $_POST['date'] . "<br>";
}else{
    echo "<p style='font-size: 20px;'>Hop, hop, hop ! Revient en arrière et rempli le formulaire correctement !</p>";
}
// VERIFICATION SEXE
if(isset($_POST['sexe'])){
    $sexe = $_POST['sexe'];
    echo "<p>Vous êtes un(e) : </p>" . $sexe . "<br>";
}
?>


<a class="btn" href="index.php">Retour</a>
</div>




</body>
</html>