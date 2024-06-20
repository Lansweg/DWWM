<?php
ob_start();
require_once "auth.php";

verifAdmin();

if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['role'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];

    $pdo = getPDOConnexion();
    $stmt = $pdo->prepare('INSERT INTO users (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nom,$prenom,$email,$telephone]);

    $user_Id = $pdo->lastInsertId();

    $stmt = $pdo->prepare('INSERT INTO userroles (user_id, role) VALUE (?,?)');
    $stmt->execute([$user_Id, $role]);

    echo "Utilisateur ajouté avec succès";

}else{
    echo "Veuillez remplir tous les champs";
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
        <input type="submit" value="Ajouter">
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







<!-- // Récupérer le contenu de la page template -->
<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require_once "template.php";
?>