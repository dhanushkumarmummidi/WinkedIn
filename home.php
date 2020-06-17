<?php
    require_once(dirname(__FILE__)."/db/conn.php");
    
    $name = "";
    $email = "";
    $notification = "N";
    $password = "";
    if(array_key_exists('username', $_POST)) {
        $name = $_POST['username'];
    }

    if(array_key_exists('email', $_POST)) {
        $email = $_POST['email'];
    }

    if(array_key_exists('password', $_POST)) {
        $password = $_POST['password'];
    }

    if(array_key_exists('notification', $_POST) && $_POST['notification'] == "on") {
        $notification = "Y";
    }
    $selectQuery = "select * from register where email='".$email."'";
    $result = $mysqli->query($selectQuery);
    var_dump($result);
    if($result->num_rows>0)
    {
        header("location:register.php?email=incorrect");
    }
    else{

    
    $queryString = "insert into register(name,email,notification,password) values(?,?,?,?)";
    $stmt = $mysqli->prepare($queryString);
    $stmt->bind_param("ssss",$name,$email,$notification,$password);
    $res = $stmt->execute(); 

    if($res) {
        $queryString = "select * from register where email='$email' and password='$password'";
        $result = $mysqli->query($queryString);
        if($result->num_rows > 0) {
            $row = mysqli_fetch_row($result);
            session_start();
            $_SESSION['userId'] = $row[0];
        }
        header("location:personalinfo.php");
    } else {
        header("location:register.php?register=false");
    }
}
?>