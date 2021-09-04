<?php 
 
require "connection.php";
include('function.php');
$uid=(int)$_GET['id'];

$sql = "SELECT * FROM user_info WHERE id ='$uid'";
$user_details=mysqli_query($link,$sql);

//$user_details=mysqli_fetch_all($user_details);
//print_r($user_details);

$sql1 = "SELECT * from addres as A where A.user_id='$uid'";
$All_addres=mysqli_query($link,$sql1);

//$All_addres=mysqli_fetch_all($All_addres);
//print_r($All_addres);

$sql2 = "SELECT * FROM phone as P where P.user_id='$uid'";
$All_phone=mysqli_query($link,$sql2);
//$All_phone=mysqli_fetch_all($All_phone);
//print_r($All_phone);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Details</title>
</head>
<body>
	<?php
  while($row = mysqli_fetch_array($user_details))

  {

  	
  	
                                echo "Frist Name :"; echo $row["f_name"]; echo "<br>";
                                
                                echo "Last Name :"; echo $row["l_name"]; echo "<br>";
                                echo "Email :"; echo $row["email"]; echo "<br>";
                                echo " Date Of Birth :"; echo $row["date_of_b"]; echo "<br>";
                               

  }


  while($row = mysqli_fetch_array($All_addres))

  {

  							echo "ADDRESS:";echo"<br>";

  	
                                echo "Address Of:"; echo $row["add_type"];echo " Address"; echo "<br>";
                                
                                echo "Street :"; echo $row["street"]; echo "<br>";
                                echo "City :"; echo $row["city"]; echo "<br>";
                                echo "State :"; echo $row["state"]; echo "<br>";
                                echo "Zip :"; echo $row["zip"]; echo "<br>";
                                echo "Country :"; echo $row["c_name"]; echo "<br>";
                               

  }
  while($row = mysqli_fetch_array($All_phone))

  {

  							echo "Phone Details";echo"<br>";

  	
                                echo "Home :"; echo $row["home_n"]; echo "<br>";
                                
                                echo "Office :"; echo $row["office_n"]; echo "<br>";
                                echo "Landline :"; echo $row["lan_n"]; echo "<br>";
                                echo "Personal :"; echo $row["personal_n"]; echo "<br>";
                                
                               

  }



 
 ?>

 </div>
<div style="color: white" class="separator">
                <p style="color: black;" class="change_link">Back to All User Info
                    <a style="color: red" href="index.php">Move</a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>

</body>
</html>