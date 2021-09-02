<?php  
session_start();
$_SESSION["uid"] = $uid;
require "connection.php";
//$uid=$_GET["id"];

if(isset($_GET['id'])) {

  	$uid = $_GET['id'];
  	echo $uid;
    
    $delete_phone=mysqli_query($link,"DELETE from addres where id ='$uid'");

  	
  	//delete($link,$uid);

	?> 
    <script type="text/javascript">

           window.location="index.php";
        </script>  	
<?php

  	}




?>