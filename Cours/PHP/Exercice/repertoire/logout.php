<?php

require_once 'login.php';
unset($_SESSION['user_id']);
$_SESSION = array();
session_destroy();
header("Location: login.php");
