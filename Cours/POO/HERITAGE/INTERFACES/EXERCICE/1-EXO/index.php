<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        background-color: chocolate;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        height: 100vh;
        width: 100vw;
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100vw;

    }

    div {
        width: auto;
        height: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: grey;
        color: #fff;
        border-radius: 10px;
        padding: 5px;
        margin: 5px;


    }

    .lapin {
        background-color: green;
    }

    .chasseurcalme {
        background-color: orange;
    }

    .chasseurfurie {
        padding: 5px;
        background-color: red;
    }
</style>

<body>
    <?php

    require_once 'Animal.class.php';
    require_once 'Chasseur.class.php';
    echo "<div class='lapin'>";
    $lapin = new Lapin("blanc", 4);
    echo "</div>";
    sleep(0);
    echo "<div class='lapin'>";
    $lapin->seNourrir();
    echo "</div>";
    sleep(0);
    echo "<div class='chasseurcalme'>";
    $chasseur = new Chasseur("Paul", "fusil");
    echo "</div>";
    sleep(0);
    ?>
    <?php
    do {
        echo "<div class='chasseurcalme'>";
        $chasseur->seDeplacer();
        echo "</div>";
        sleep(0);
        echo "<div class='lapin'>";
        $lapin->crier();
        echo "</div>";
        sleep(0);
        echo "<div class='chasseurcalme'>";
        $chasseur->chasser($lapin);
        echo "</div>";
        sleep(0);
        if ($lapin->enVie) {
            echo "<div class='lapin'>";
            $lapin->fuir();
            echo "</div>";
            sleep(0);
        }
        echo "</div>";
        sleep(0);
    } while ($lapin->enVie);
    ?>

</body>

</html>