<?php
    require_once("db/conn.php");
    session_start();

  if(isset($_SESSION['userId'])) {
      $userId = $_SESSION['userId'];
  } 
 
    $query="select interest from profile where user_id ='$userId'";
    $res = $mysqli->query($query);
    
    if($res->num_rows > 0) {
        $row = mysqli_fetch_row($res);
        $interest = $row[0];
    }    

    $queryStr="select r.user_id,r.name, p.interest,p.image, p.age, p.country from register r, profile p where r.user_id = p.user_id and r.user_id != '$userId' order by user_id desc limit 100";
    $stmtquery = $mysqli->query($queryStr);
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
    <div class="members">
    <?php
        if($stmtquery->num_rows>0) {
        while ($row_users = $stmtquery->fetch_assoc()) {
            //var_dump($row_users);
?>
     <div class="memberinfo"><a href="#"><img src="<?=$path.$row_users['image']?>" alt="member" class="member" /></a>
            <p>Name: <?=$row_users['name']?></p>
            <p>Age: <?=$row_users['age']?></p>
            <p>Country: <?=$row_users['country']?></p>
            <a href="profiledetails.php?user_id=<?=$row_users['user_id']?>">Visit profile</a><br>
            <?php $favUserId = $row_users['user_id'] ?>
            <a href="addFavourite.php?favUserId=<?=$favUserId?>&link=fav">Add to Favourite</a>&nbsp;&nbsp;
            <a href="addWink.php?winkUserId=<?=$favUserId?>"><img src="images/wink.jpg" style="height:25px;width:25px;" title="Wink"/></a>
            </div>
        <?php       }    
    }  ?> 
    </div>
    </body>
</html>