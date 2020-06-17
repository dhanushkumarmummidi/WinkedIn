<?php
    
    // Connection
    $mysqli = new mysqli("localhost", "root", "admin", "dating");
    //var_dump($mysqli);
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
?>