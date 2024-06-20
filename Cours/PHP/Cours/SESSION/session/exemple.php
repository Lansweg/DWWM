<?php

// Je démarre une session
session_start();

// Stocket des infos dans la session
$_SESSION['username'] = 'John';
$_SESSION['mail'] = 'john@doe.com';

// Accéder au informations de la session
echo 'Username : ' . $_SESSION['username'] . '<br>';
echo 'Mail : ' . $_SESSION['mail'] . '<br>';


// Jé vérifie si la session est active
if(isset($_SESSION['username'])) {
    echo "L'utilisateur" . ' ' . $_SESSION['username'] . ' ' . "est connecté";
} else {
    echo "L\'utilisateur n\'est pas connecté";
}

// Pour supprimer une variable de session
unset($_SESSION['username']);

// Detruire la session
$_SESSION = array();


// Détruire le cookie de session
if(ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
session_destroy();



// Pas de balise de fermeture quand il n'y a que du PHP !







































