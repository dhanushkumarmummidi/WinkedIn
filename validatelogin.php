<?php
    //require_once('conn.php');
    require_once(dirname(__FILE__)."/db/conn.php");
    session_start();

    if(isset($_SESSION['userId']))
    {
        header("Location:profile.php");
    }
    else{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $queryString = "select * from register where email='$email' and password='$password'";
    $res = $mysqli->query($queryString);
    if($res->num_rows > 0) {
        $row = mysqli_fetch_row($res);
        $_SESSION['userId'] = $row[0];

        $_SESSION['noOfWinks'] = 0;
        $queryString = "select count(user_id1) from wink where user_id1 = '$row[0]'";
        $res = $mysqli->query($queryString);
        if($res->num_rows > 0) {
            $row = mysqli_fetch_row($res);
            $_SESSION['noOfWinks'] = $row[0];
        }

        header("location:profile.php");
    } else {
        header("location:login.php?login=false");
    }
}   
?>