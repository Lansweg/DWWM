<?php

session_start();
$username = "john";
$password = "doe";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $clean_username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $clean_password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

    if ($clean_username == $username && $clean_password == $password) {
        $_SESSION['username'] = $clean_username;
        $_SESSION['password'] = $clean_password;
        header("Location: index.php"); // Redirige vers la page d'accueil
        exit();
    } else {
        
        echo "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>

<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form id="loginForm" action="login.php" method="post">
    <h1>Connection</h1>
    <label for="username">Nom d'utilisateur</label>
    <input class="input" type="text" name="username" id="username" required>

    <label for="password">Mot de passe</label>
    <input class="input" type="password" name="password" id="password" required>

    <button class="btn" type="submit" value="Envoyer">Login</button>
</form>


</body>
</html>