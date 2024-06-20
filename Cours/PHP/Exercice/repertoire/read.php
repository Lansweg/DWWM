<?php
ob_start();
require_once "auth.php";

verifAdmin();

try {
    $pdo = getPDOConnexion();


    $userQuery = $pdo->prepare("SELECT * FROM users");
    $userQuery->execute();
    $users = $userQuery->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de la requête : " . $e->getMessage());
}
?>








<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['nom']) ?></td>
            <td><?= htmlspecialchars($user['prenom']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['telephone']) ?></td>
            <?php
            $roleQuery = $pdo->query("SELECT role FROM userroles WHERE user_id = {$user['id']}");
            $userRole = $roleQuery->fetch(PDO::FETCH_ASSOC);
            ?>
            <td><?= htmlspecialchars($userRole['role']) ?></td>

            <td>
                <a href="update_T.php?id=<?= htmlspecialchars($user['id']) ?>">✏️</a>
                <a href="read.php?id=<?= htmlspecialchars($user['id']) ?>">❌</a>
                <?php
                if (isset($_GET['id'])) {
                    $userId = $_GET['id'];
                    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
                    $stmt->execute([$userId]);

                    // Redirection vers la page de liste après la suppression
                    header("Location: read.php");
                    exit;
                }
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="login-container">
    <form action="create.php" method="post">
        <input type="submit" value="Créer un utilisateur">
    </form>
</div>


<?php
$content = ob_get_clean();
$titre = "Liste des utilisateurs";
require_once "template.php";
?>