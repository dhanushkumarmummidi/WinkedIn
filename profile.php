<?php 
require_once("header.php"); 
session_start();
if(isset($_SESSION['userId']))
{
    $user_id=$_SESSION['userId'];
}
require_once(dirname(__FILE__)."/db/conn.php");
$queryString = "select r.user_id,r.name, p.image, p.age, p.country from register r, profile p where r.user_id = p.user_id and r.user_id='$user_id'";
$res = $mysqli->query($queryString);
//var_dump($res);
?>
<section class="left" id="left">
    <div class="quotes">
        <div class="intro">
            <div class="dp">
            <?php if($res->num_rows>0) {
                 $row_users = $res->fetch_assoc();
                 //var_dump($row_users);?>

                <a href="profile.php"><img src="profile_pics/<?=$row_users['image']?>" name="profile" class="profile" /></a></div>
            <div class="username">
                <center><a href="profiledetails.php?user_id=<?=$user_id?>" target="iframe_a"><?=$row_users['name']?></a></center><br>
            </div>
        </div>
 
        <p><a href="profile.php">Home</a></p>
       
        <p><a href="profiledetails.php?user_id=<?=$user_id?>" target="iframe_a">Profile</a></p>
        
        <p><a href="logout.php">Logout</a></p>
       
        <p>Favourite Members</p>
        <ul>
            <?php
            $queryFav="select DISTINCT f.user_id1, f.user_id2,  r.name from register r, favorites f where r.user_id=f.user_id2 and f.user_id1 ='$user_id'";
            $result=$mysqli->query($queryFav);
             if($result->num_rows>0) {
                while($row_user = $result->fetch_assoc()){
                //var_dump($row_users);?>
            <li><a href="profiledetails.php?user_id=<?=$user_id?>" target="iframe_a"><?=$row_user['name']?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="addFavourite.php?favUserId=<?=$row_user['user_id2']?>&link=remove">Remove</a></li>
             <?php }
             } ?>
        </ul>
        <?php } ?>
    </div>
</section>
<section class="right" id="right">
    <div class="register">
        <iframe height="300px" width="100%" src="members.php" name="iframe_a"></iframe>
    </div>
</section>
<?php require_once("footer.php"); ?>