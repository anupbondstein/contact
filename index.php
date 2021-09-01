<?php

require "connection.php";
include('function.php');

$all_address=mysqli_query($link,"select * from user_info ");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Wellcome</title>


</head><style>
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
    <th >Frist Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Delete</th>
    <th> <a href="add_new.php">Add new</a></th>
    <th>Adress</th>
    <th>phone</th>
    <th></th>
 
  </tr>
<?php
  while($row = mysqli_fetch_array($all_address))

  {

  	
  	 echo "<tr>";
                                echo "<td>"; echo $row["f_name"]; echo "</td>";
                                
                                echo "<td>"; echo $row["l_name"]; echo "</td>";
                                echo "<td>"; echo $row["email"]; echo "</td>";

                                 
                            	
                             ?>
                            
                             		<td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                             		<td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >Edit</a>
                             			<td><a href="address.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >Address List</a>
                             				<td><a href="phone.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >Phone List</a>
                                      <td><a href="#.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >View Details</a>
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