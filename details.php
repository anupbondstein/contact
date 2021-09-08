<?php 
 
  require "connection.php";
  include('function.php');
  $uid=(int)$_GET['id'];

  $sql = "SELECT * FROM user_info WHERE id ='$uid'";
  $user_details=mysqli_query($link,$sql);

  $sql1 = "SELECT * from addres as A where A.user_id='$uid'";
  $All_addres=mysqli_query($link,$sql1);

  $sql2 = "SELECT * FROM phone as P where P.user_id='$uid'";
  $All_phone=mysqli_query($link,$sql2);
 
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>All Details</title>
    <meta charset="UTF-8">
      <title>View Record</title>
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      
      <style>

          .wrapper{
              width: 600px;
              margin: 0 auto;
          }

          .content {
                max-width: 500px;
                margin: auto;
          }

      </style>

  </head>
  <body >

    <div class="mt-5 mb-3 clearfix" >
        
        <h5 style="text-align: center;">Full Contract </h5>

    </div>

    <div class="content">
    

  	<?php

      while($row = mysqli_fetch_array($user_details))

      {
            echo "Frist Name : "; echo "<b>". $row["f_name"]."</b>"; echo "<br>";
            echo "Last Name : "; echo "<b>". $row["l_name"]."</b>"; echo "<br>";
            echo "Email : "; echo "<b>". $row["email"]."</b>"; echo "<br>";
            echo " Date Of Birth : "; echo "<b>". $row["date_of_b"]."</b>"; echo "<br>";
      }


      while($row = mysqli_fetch_array($All_addres))

      {

          echo "<h6> ADDRESS</h6>";echo"<br>";
          echo " Address of : "; echo "<b>".$row["add_type"]."</b>";echo " <b> Address"."</b>"; echo "<br>";
          echo "Street : "; echo "<b>".$row["street"]."</b>"; echo "<br>";
          echo "City : "; echo "<b>".$row["city"]."</b>"; echo "<br>";
          echo "State : "; echo "<b>". $row["state"]."</b>"; echo "<br>";
          echo "Zip : "; echo  "<b>".$row["zip"]."</b>"; echo "<br>";
          echo "Country : "; echo "<b>".$row["c_name"]."</b>"; echo "<br>";
      }

      while($row = mysqli_fetch_array($All_phone))

      {

  				echo "<h6> Phone Details </h6>";echo"<br>";
          echo "Home : "; echo "<b>". $row["home_n"]."</b>"; echo "<br>";
          echo "Office : "; echo "<b>".$row["office_n"]."</b>"; echo "<br>";
          echo "Landline : "; echo "<b>".$row["lan_n"]."</b>"; echo "<br>";
          echo "Personal : "; echo "<b>".$row["personal_n"]."</b>"; echo "<br>";
                                    
      }
    
    ?>

   <div style="color: white" class="separator">
                  <p>
                  
                    <a href="index.php" class="btn btn-primary">Back</a>
                  
                  </p>

                  <div class="clearfix"></div>
                  
                  <br/>

   </div>


  </body>
</html>