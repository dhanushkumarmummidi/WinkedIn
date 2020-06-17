<?php
    require_once(dirname(__FILE__)."/db/conn.php");
    $winkUserId = "";

    if(isset($_GET['winkUserId'])) {
        $winkUserId = $_GET['winkUserId'];
    }

    session_start();
    if(isset($_SESSION['userId'])) {
        $currUserId = $_SESSION['userId'];
    }

    $queryString = "insert into wink(user_Id1, user_Id2) values(?,?)";
    $stmt = $mysqli->prepare($queryString);
    $stmt->bind_param("ii",$currUserId, $winkUserId);
    $res = $stmt->execute(); 
    if($res) {
        $queryString = "select count(user_id1) from wink where user_id1 = '$currUserId'";
        $res = $mysqli->query($queryString);
        if($res->num_rows > 0) {
            $row = mysqli_fetch_row($res);
            $_SESSION['noOfWinks'] = $row[0];
        }
        header("location:members.php");
    }

?>