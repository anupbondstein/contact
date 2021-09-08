<?php
    session_start();
    $uid=$_GET["id"];
    $_SESSION["uid"] = $uid;
    //print_r($_SESSION['uid']);
    require "connection.php";
    $uid=(int)$_GET['id'];

    $showAll_add="Select * from phone where user_id ='$uid' " ;

    $sql =mysqli_query($link,$showAll_add);


?>

<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title></title>
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>

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
    </head>

    <body>
      <div class="mt-5 mb-3 clearfix" >
                            <h2 style="text-align: center;">Phone Details</h2>

      </div>
    	<table class="table table-bordered table-striped" align="center";>
          <tr>
            <th >Home </th>
            <th>Office</th>
            <th>Landline</th>
            <th>Personal</th>

            <th> <a href="new_phone.php"><b>+ Add new</a></th>
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
                                        
                 		<td>
                            <a href="del_p.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                 		<td>
                            <a href="upd_p.php?id=<?php echo $row['id']; ?>" class="fa fa-pencil" >Edit</a>
                 		</td> 

                 	</tr>
            <?php

                                           

              } 

             
         ?>
        </table>

        <div style="color: white" class="separator">
                    <p>
                        <a href="index.php" class="btn btn-primary">Back</a></p>
                   
                    </p>

                    <div class="clearfix"></div>
                    <br/>


                </div>



    </body>
</html>