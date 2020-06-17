<?php
    require_once("db/conn.php");
    $queryStr="select r.user_id,r.name, p.image, p.age, p.country from register r, profile p where r.user_id = p.user_id order by user_id desc limit 4";
    $stmtquery = $mysqli->query($queryStr);
    $path="profile_pics/";
?>
    
<footer class="footer">
        <h2>Meet our new members</h2>
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
            <?php if(isset($_SESSION['userId']))
            {
            ?>
            <a href="profile.php?user_id=<?=$row_users['user_id']?>">Visit profile</a>
            <?php } 
            else {
                
                ?>
                <a href="login.php?user_id=<?=$row_users['user_id']?>">Visit profile</a>
            <?php } ?>
        </div>
        <?php       }    
    }  ?>        </div> 
            <p>@copyright @ DhanushMummidi</p>
        </footer>
        <script src="javascript/main.js"></script>
    </div>
</body>
</html>