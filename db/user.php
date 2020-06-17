<?php
    //require_once('conn.php');
    require_once(dirname(__FILE__)."/conn.php");
    $queryString = "insert into register(name,email,notification,password) values(?,?,?,?)";
    $stmt = $mysqli->prepare($queryString);
    $stmt->bind_param("ssss",$name,$email,$notification,$password);
    $res = $stmt->execute();  
?>