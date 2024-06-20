<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
<form action="login.php" method="post">
    <h1>Formulaire d'inscription</h1>
    <label for="nomprenom">Nom Complet</label>
    <input class="input" type="text" name="nomprenom" id="nomprenom" required>
    <!-- <br> -->
    <label for="email">Email</label>
    <input class="input" type="email" name="email" id="email" required>
    <!-- <br> -->
    <label for="pass">Mot de passe</label>
    <input class="input" type="password" name="pass" id="pass" required>
    <!-- <br> -->
    <label for="pass2">Confirmer le mot de passe</label>
    <input class="input" type="password" name="pass2" id="pass2" required>
    <!-- <br> -->
    <label for="date">Date de naissance</label>
    <input class="input" type="date" name="date" id="date" required>
    <!-- <br> -->
    <label for="sexe">Sexe</label>
    <label for="homme">Homme</label>
    <input class="input1" type="radio" name="sexe" id="homme" value="homme" required>
    <label for="femme">Femme</label>
    <input class="input1" type="radio" name="sexe" id="femme" value="femme" required>
    <!-- <br> -->
    <input class="btn" type="submit" value="Envoyer">
</form>
</body>
</html>