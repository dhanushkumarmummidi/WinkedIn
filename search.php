<?php
    require_once(dirname(__FILE__)."/db/conn.php");
    $name = "";
    $currentUserId = "";
    if(isset($_POST['search'])) {
        $name = $_POST['search'];        
    }

    session_start();
    if(isset($_SESSION['userId'])) {
        $currentUserId = $_SESSION['userId'];
    }
    //echo $name;
    //echo $currentUserId;
    $queryString2 = "select r.user_id, r.name, p.image, p.age ,p.country from register r, profile p where r.name = ? and r.user_id != ? and r.user_id = p.user_id";
    $stmt1 = $mysqli->prepare($queryString2);
    $stmt1->bind_param("si",$name,$currentUserId);
    $stmt1->execute();
    $res1 = $stmt1->get_result();
    //var_dump($res1);
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
    if($res1) {
        while ($row_users1 = $res1->fetch_assoc()) {
            //var_dump($row_users);?>
             <div class="memberinfo"><a href="#"><img src="<?="profile_pics/".$row_users1['image']?>" alt="member" class="member" /></a>
            <p>Name: <?=$row_users1['name']?></p>
            <p>Age: <?=$row_users1['age']?></p>
            <p>Country: <?=$row_users1['country']?></p>
            <?php $favUserId = $row_users1['user_id'] ?>
            <a href="profiledetails.php?user_id=<?=$favUserId?>">Visit profile</a><br>
            <?php $favUserId = $row_users1['user_id'] ?>
            <a href="addFavourite.php?favUserId=<?=$favUserId?>&link=fav">Add to Favourite</a>&nbsp;&nbsp;
            <a href="addWink.php?winkUserId=<?=$favUserId?>"><img src="images/wink.jpg" style="height:25px;width:25px;" title="Wink"/></a>
            </div>
        <?php       }    
    } 
else {
    echo 'user does not exist';
}
    ?> 
    </div>
    </body>
</html>