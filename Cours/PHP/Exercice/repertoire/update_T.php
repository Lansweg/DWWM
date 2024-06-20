<?php
ob_start();
require_once "auth.php";

verifAdmin();

$pdo = getPDOConnexion();

?>




<?php
if (isset($_POST['id'])) {
    $stmt = $pdo->prepare("UPDATE users SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, role = :role WHERE id = :id");
    $stmt->execute([
        ':nom' => $_POST['nom'],
        ':prenom' => $_POST['prenom'],
        ':email' => $_POST['email'],
        ':telephone' => $_POST['telephone'],
        ':role' => $_POST['role'],
        ':id' => $_POST['id']
    ]);
    header("Location: read.php");
    exit;
}
?>




<div class="form-container">
    <form method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="telephone">Téléphone</label>
        <input type="text" name="telephone" id="telephone" required>
        
        <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="non-admin">Non-admin</option>
        </select>
        <input type="submit" value="Modifier">
        <?php if (isset($error)) : ?>
            <p class="error"><?php echo htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <?php 
        if (isset($_POST['nom'])) {
            header("Location: read.php");
        }
        ?>
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un utilisateur";
require_once "template.php";
?>