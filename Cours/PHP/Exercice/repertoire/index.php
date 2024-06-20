<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    require_once "dbConnect.php";
    require_once "auth.php";
    
    if(!isset($_SESSION['user_id'])){
        header('Location:login.php');
        exit();
    }
    
    verifAdmin();

?>

<div class="welcome-text">
    <h2>Bienvenue sur la page d'accueil du CRUD gestion Repertoire</h2>
    <p>Utilisez le menu ci-dessus pour naviguer entre les diffÃ©rentes actions CRUD.</p>
</div>




<?php
$content = ob_get_clean();
$titre = "Accueil";
require "template.php";
?>