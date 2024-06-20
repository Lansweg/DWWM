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
        <th>Prenom</th>
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
            <a href="update_T.php?id=<?= htmlspecialchars($user['id']) ?>">✏️</a>
        </td>


    </tr>
    <?php endforeach; ?>
</table>


<?php
$content = ob_get_clean();
$titre = "Liste des utilisateurs";
require_once "template.php";
?>