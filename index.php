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

  <script>

      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });

  </script>

<body>

  <div class="mt-5 mb-3 clearfix" >
      
      <h2 style="text-align: center;">Contract Details</h2>

  </div>
  	<table class="table table-bordered table-striped" align="center";>

        <tr>
          <th >Frist Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Delete</th>
          <th> <a href="add_new.php" ><b>+ Add new</b></a></th>
          <th>Adress</th>
          <th>Phone</th>
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
                                    
             		<td>
                  <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
             		<td>
                  <a href="update.php?id=<?php echo $row['id']; ?>" class="fa fa-pencil" >Edit</a>
             		<td>
                  <a href="address.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" >Address List</a>		
                <td>
                  <a href="phone.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary" >Phone List</a>
                <td>
                  <a href="details.php?id=<?php echo $row['id']; ?>" class="fa fa-eye" >View Details</a>
             		</td> 

             	
            </tr>
                                    
                                     
                                    
             <?php

          } 

         
            ?>

      </table>



  </body>
  
</html>