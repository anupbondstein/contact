<?php
session_start();

require "connection.php";

$uid=(int)$_GET['id'];
$_SESSION["uid"] = $uid;


$showAll_add="Select * from addres where user_id ='$uid' " ;

$sql =mysqli_query($link,$showAll_add);
//$arry=mysqli_fetch_array($sql);

//print_r($arry);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
  <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
table, th, td {
  font-size: large;
  text-align: center;
  border: 2px solid green;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
   .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
</style>
<body>
  <div class="mt-5 mb-3 clearfix" >
     <h2 style="text-align: center;">Address Details</h2>  

  </div>
	<table class="table table-bordered table-striped" align="center";>
  <tr>
    <th >Address Type</th>
    <th>Street</th>
    <th>City</th>
    <th>Country</th>
    <th>State</th>
    <th>Zip/PO</th>
    <th> <a href="new_ad.php"><br> + Add new</a></th>
    <th>Edit</th>
    
    <?php
  while($row = mysqli_fetch_array($sql))

  {

  	
  	 echo "<tr>";
                                echo "<td>"; echo $row["add_type"]; echo "</td>";
                                
                                echo "<td>"; echo $row["street"]; echo "</td>";
                                echo "<td>"; echo $row["city"]; echo "</td>";
                                echo "<td>"; echo $row["c_name"]; echo "</td>";
                                echo "<td>"; echo $row["state"]; echo "</td>";
                                echo "<td>"; echo $row["zip"]; echo "</td>";
                                 
                            	
                             ?>
                            
                             		<td><a href="del_a.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                             		<td><a href="upd_a.php?id=<?php echo $row['id']; ?>" class="fa fa-pencil" >Edit</a>
                             		</td> 

                             	</tr>
                            
                             </div>
                            
                             <?php

//
                               

  } 

 
 ?>
    </table>
   <div style="color: white" class="separator">
                <p><a href="index.php" class="btn btn-primary">Back</a></p>
               
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>


</body>
</html>