<?php
	require "conn.php";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="page-container">
            
            <form action="edit.php" method="post">
			<h1>Edit </h1>
                <input type="text" name="f_name" class="name" placeholder="Frist Name" required="">
                <input type="text" name="l_name" class="name" placeholder="Last Name" required="">
                 <input type="text" name="email" class="email" placeholder="Email" required="">
				
                <button type="submit" value="submit" name="submit">Edit</button>
            </form>

<?php

            if (isset($_POST["submit"]))
            {
              $f_name=$_POST['f_name'];
              $l_name=$_POST["l_name"];
              $email=$_POST["email"];
              echo $f_name;

              echo $l_name;
              echo $email;


             $update =mysqli_query($link,"UPDATE user_info set f_name='$f_name' where user_info.id ='$uid'");
                if ($update === TRUE) {
                    ?>
                    <script type="text/javascript">

            window.location="#.php";
        </script>  	
                
                <?php
                } else {
                    echo "<script>window.alert('Something went wrong!')</script>";
                }
            }
?>

</div>


</body>
</html>
