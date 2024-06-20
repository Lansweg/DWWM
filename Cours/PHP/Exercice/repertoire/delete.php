<?php
ob_start();
require_once "auth.php";

verifAdmin();

$pdo = getPDOConnexion();


$userQuery = $pdo->query("SELECT * FROM users");
$users = $userQuery->fetchAll(PDO::FETCH_ASSOC);


?>







<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user): ?>
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
            <a href="delete.php?id=<?= htmlspecialchars($user['id']) ?>">❌</a>
            <?php
            if (isset($_GET['id'])) {
                $userId = $_GET['id'];
                $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
                $stmt->execute([$userId]);
            
                // Redirection vers la page de liste après la suppression
                header("Location: update.php");
                exit;
            }
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>


<?php
$content = ob_get_clean();
$titre = "Liste des utilisateurs";
require_once "template.php";
?>