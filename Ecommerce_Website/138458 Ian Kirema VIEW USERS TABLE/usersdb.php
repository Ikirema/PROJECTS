<?php

require_once("connect.php");

$sqli="SELECT * FROM tbl_users";
$result = mysqli_query($conn , $sqli);
$test=mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_GET["edit"])){
 $id=$_GET["edit"];
 $sqli="SELECT * FROM tbl_users WHERE user_id=$id";

}
?>
