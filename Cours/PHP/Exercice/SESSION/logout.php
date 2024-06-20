<?php
require_once 'login.php';

unset($_SESSION['username']);

// Detruire la session
$_SESSION = array();


// Détruire le cookie de session
if(ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
session_destroy();

header("Location: . login.php");

?>

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
        <h3>Vous avez été déconnecté</h3>
        <a class="btn" href="login.php">Se connecter</a>
    </div>
    
</body>
</html>

