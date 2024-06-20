
<?php
ob_start();
require_once "dbConnect.php";

// Si la session n'est pas active, on la démarre
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Si le formulaire est soumis, on récupère l'email
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $pdo = getPDOConnexion();
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();


// Si l'utilisateur existe, on créé une session et on redirige vers la page d'accueil
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Utilisateur non trouvé";
    }
}
?>

<div class="login-container">
    <?php if (isset($error)) : ?>
        <p class="error"><?php echo htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Login">
    </form>
</div>






<!-- // Récupérer le contenu de la page template -->
<?php
$content = ob_get_clean();
$titre = "CONNEXION ADMIN";
require_once "template.php";
?>