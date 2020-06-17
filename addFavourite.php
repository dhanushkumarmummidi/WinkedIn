<?php
    require_once(dirname(__FILE__)."/db/conn.php");
    $favUserId = "";
    $currUserId = "";
    $linkFunc = "";

    if(isset($_GET['favUserId'])) {
        $favUserId = $_GET['favUserId'];
    }

    if(isset($_GET['link'])) {
        $linkFunc = $_GET['link'];
    }

    session_start();
    if(isset($_SESSION['userId'])) {
        $currUserId = $_SESSION['userId'];
    }

    if($linkFunc == "fav") {
        $queryString = "insert into favorites(user_Id1, user_Id2) values(?,?)";
        $stmt = $mysqli->prepare($queryString);
        $stmt->bind_param("ii",$currUserId, $favUserId);
        $res = $stmt->execute(); 
        if($res) {
            header("location:members.php?add=true");
        }
    } else if($linkFunc == "remove") {
        $queryString = "delete from favorites where user_id1 = ? and user_id2 = ?";
        $stmt = $mysqli->prepare($queryString);
        $stmt->bind_param("ii",$currUserId, $favUserId);
        $res = $stmt->execute(); 
        if($res) {
            header("location:profile.php");
        }
    }
?>