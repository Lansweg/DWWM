<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$email = "";
if(isset($_POST['email'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if($email){
        echo "<p>Email valide</p>";
    }else{
        echo "<p>Email invalide</p>";
    }
}   
?>
<h2>Email : <?= $email ?></h2>
    <form action="index.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= htmlspecialchars($email) ?>">
        <input type="submit" value="Envoyer">
    </form>    

</body>
</html>