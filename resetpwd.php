<?php
if(isset($_POST) & !empty($_POST)){
    require_once(dirname(__FILE__)."/db/conn.php");
	$email =$_POST['email'];
	$sql = "SELECT * FROM register WHERE email = '$email'";
	$res = $mysqli->query($sql);
	$count = $res->num_rows;
	if($count == 1){
$r = mysqli_fetch_assoc($res);
$password = $r['password'];
$to = $r['email'];
$subject = "Your Recovered Password";
 
$message = "Please use this password to login " . $password;
$headers = "From : sharma00.aman@gmail.com";
if(mail($to, $subject, $message, $headers)){
	echo "Your Password has been sent to your email id";
}else{
	echo "Failed to Recover your password, try again";
}
	}else{
		echo "User name does not exist in database";
	}
}