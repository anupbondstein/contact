<?php
session_start();
$uid=$_GET["id"];
$_SESSION["uid"] = $uid;
//print_r($_SESSION['uid']);
require "connection.php";
$uid=(int)$_GET['id'];

$showAll_add="Select * from phone where user_id ='$uid' " ;

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
    <th >Home </th>
    <th>Office</th>
    <th>Landline</th>
    <th>Personal</th>

    <th> <a href="new_phone.php">Add new</a></th>
    <th>Edit</th>
    
    <?php
  while($row = mysqli_fetch_array($sql))

  {

  	
  	 echo "<tr>";
                                echo "<td>"; echo $row["home_n"]; echo "</td>";
                                
                                echo "<td>"; echo $row["office_n"]; echo "</td>";
                                echo "<td>"; echo $row["lan_n"]; echo "</td>";
                                echo "<td>"; echo $row["personal_n"]; echo "</td>";
                               
                                 
                            	
                             ?>
                            
                             		<td><a href="del_p.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                             		<td><a href="upd_p.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >Edit</a>
                             		</td> 

                             	</tr>
                            
                             </div>
                            
                             <?php

                               

  } 

 
 ?>
    </table>


</body>
</html>