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
</head>
<style>
table, th, td {
  font-size: large;
  color: darksalmon;
  text-align: center;
  border: 2px solid green;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>
	<table align="center";>
  <tr>
    <th >Address Type</th>
    <th>Street</th>
    <th>City</th>
    <th>Country</th>
    <th>State</th>
    <th>Zip/PO</th>
    <th> <a href="new_ad.php">Add new</a></th>
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
                             		<td><a href="upd_a.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >Edit</a>
                             		</td> 

                             	</tr>
                            
                             </div>
                            
                             <?php

//
                               

  } 

 
 ?>
    </table>


</body>
</html>