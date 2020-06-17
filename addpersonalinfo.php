<?php
    //require_once('conn.php');
    require_once(dirname(__FILE__)."/db/conn.php");

    $userId = "";
    $gender = "";
    $interest = "";
    $dob = "";
    $day = "";
    $month = "";
    $year = "";
    $age = "";
    $height = "";
    $weight = "";
    $country="";
    $hobbies = "";
    $image = "";

    session_start();
    if(isset($_SESSION['userId'])) {
        $userId = $_SESSION['userId'];
    }

    if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }

    if(isset($_POST['interest'])) {
        $interest = $_POST['interest'];
    }

    if(isset($_POST['day'])) {
        $day = $_POST['day'];
    }

    if(isset($_POST['month'])) {
        $month = $_POST['month'];
    }

    if(isset($_POST['year'])) {
        $year = $_POST['year'];
    }

    $dob = $day."-".$month."-".$year;

    if(isset($_POST['age'])) {
        $age = $_POST['age'];
    }

    if(isset($_POST['height'])) {
        $height = $_POST['height'];
    }

    if(isset($_POST['weight'])) {
        $weight = $_POST['weight'];
    }

    if(isset($_POST['hobbies'])) {
        $hobbies = $_POST['hobbies'];
    }

    if(isset($_POST['country'])) {
        $country = $_POST['country'];
    }

    //echo $userId.','.$gender.','.$interest.','.$dob.','.$country.','.$age.','.$height.','.$weight.','.$hobbies;

    const TARGET_DIR = 'profile_pics/';
    const FILE_DATA_NAME = 'profilepic';
    if(isset($_FILES[FILE_DATA_NAME])){
        $target_file = TARGET_DIR.$_FILES[FILE_DATA_NAME]["name"];
        $image = $_FILES[FILE_DATA_NAME]["name"];
        $upload_ok = move_uploaded_file($_FILES[FILE_DATA_NAME]["tmp_name"], $target_file);
    }

    //var_dump($_FILES);
    //echo $_FILES[FILE_DATA_NAME]["name"];

    $queryString = "insert into profile values(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($queryString);
    $stmt->bind_param("isssiddsss",$userId,$gender,$interest,$dob,$age,$height,$weight,$hobbies,$country,$image);
    $res = $stmt->execute();
    var_dump($res);
    if($res){
        header("location:profile.php?profile=true");
    }   
?>

