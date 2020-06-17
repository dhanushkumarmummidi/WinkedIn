<?php
  session_start();
  $noOfWinks= 0; 
  if(isset($_SESSION['noOfWinks'])) {
      $noOfWinks = $_SESSION['noOfWinks'];
  } 
if(isset($_GET['user_id']))
{
  $userId=$_GET['user_id'];
}
//var_dump($_GET['user_id']);
    require_once("db/conn.php");
    $queryStr="select r.user_id,r.name, p.gender,p.interest,p.dob,p.height,p.weight,p.hobbies,p.image, p.age, p.country from register r, profile p where r.user_id = p.user_id and r.user_id='$userId'";
    $stmtquery = $mysqli->query($queryStr);
    //var_dump($stmtquery);
    $path="profile_pics/";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Members</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">
 
    </head>
    <body>
        <br>
        <br>
        <?php
        if($stmtquery->num_rows>0) {
        $row_users = $stmtquery->fetch_assoc();
            //var_dump($row_users);
?>
    <h2><center><?=$row_users['name']?></center></h2>
    <br>
    <br>
    <div class="memberinfo" style="text-align:center;"><a href="profile.php">
      <img src="<?=$path.$row_users['image']?>" alt="member" class="member" /></a>     
<table style="text-align:center;width:100%;">
  <tr>
    <td>Gender</td>
    <td><?=$row_users['gender']?></td>
  </tr>
  <tr>
    <td>Interested In</td>
    <td><?=$row_users['interest']?></td>
  </tr>
  <tr>
    <td>Date Of Birth</td>
    <td><?=$row_users['dob']?></td>
  </tr>
  <tr>
    <td>Height</td>
    <td><?=$row_users['height']?></td>
  </tr>
  <tr>
    <td>Weight</td>
    <td><?=$row_users['weight']?></td>
  </tr>
  <tr>
    <td>Country</td>
    <td><?=$row_users['country']?></td>
  </tr>
  <tr>
    <td>No of Winks</td>
    <td><?=$noOfWinks ?></td>
  </tr> 
</table>
</div>
        <?php } ?>
    </body>
</html>