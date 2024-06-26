<?php

// // phpinfo();
// // ====================================================
// // ====================Données BDD=====================
// // ====================================================
// $host = '127.0.0.1';
// $port = 3306;
// $db = 'test';
// $user = 'root';
// $pass = 'root';
// $charset = 'utf8mb4';
// // ====================================================
// // ====================================================
// // ====================================================
// $dsn = 'mysqlli:host=$host;port=$port;dbname=$db;charset=$charset'; //data_source_name


// $options = [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES => false,
// ];

// try{
//     $pdo = new PDO($dsn,$user,$pass,$options);
//     echo 'Connexion établie a la base de donnée!';
// } catch (PDOException $e){
//     throw new PDOException($e->getMessage(),(int)$e->getCode());
// }

$host = 'localhost';
$port =  '3306';
$db = 'information_schemas';
$user = 'root';
$pwd = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$options =[
    PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try{
    $pdo = new PDO($dsn,$user,$pwd,$options);
    echo "Connexion réussie à la base de données";
}catch(PDOException $e){
    throw new PDOException($e->getMessage(),(int)$e->getCode());
}
