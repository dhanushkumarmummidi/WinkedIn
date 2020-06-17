<?php
require_once(dirname(__FILE__)."/conn.php");
$queryString = "select * from register";
$res = $mysqli->query($queryString);