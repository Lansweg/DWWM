<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Acceuil</title>
</head>
<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
   <div class="form">
    <h3>Bienvenue <?= $_SESSION['username'] ?></h3>
    <!-- <h3>Ton mot de passe est <?= $_SESSION['password'] ?></h3> -->
    <a class='btn' href="login.php">Se deconnecter</a>
   </div> 
</body>
</html>