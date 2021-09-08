<?php 

  require "connection.php";
  include('function.php');

  if(isset($_GET['id'])) 
  {

    	$uid = $_GET['id'];
    	echo $uid;
      $delete_address=mysqli_query($link,"Delete from addres where user_id ='$uid'");
      $delete_phone=mysqli_query($link,"Delete from phone where user_id ='$uid'");

    	$delet_user=mysqli_query($link," DELETE  From user_info where id ='$uid'");

    	//delete($link,$uid);

  	  ?> 
      
      <script type="text/javascript">

             window.location="index.php";

      </script>  

      <?php

  }


?>
