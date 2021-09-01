<?php 
require "connection.php";
include('function.php');

$uid=(int)$_GET['id'];
//echo $uid;
//echo gettype($uid)."\n";

$qry = mysqli_query($link,"select * from user_info where id='$uid'");
$data= mysqli_fetch_array($qry);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update</title>
	<link href="CSS/style.css" rel="stylesheet" type="text/css" />


<style type="text/css">
    body {
background:url(p4.jpg);
font-family:'PT Sans',Helvetica, Arial, sans-serif;
color:#fff;
   background-repeat: no-repeat;
   background-size:cover;
}

.page-container {
margin: 120px auto 0 auto;
}

h1 {
    font-size: 30px;
    font-weight: 700;
    text-shadow:0 1px 4px rgba(0,0,0,.2);
    text-align:center;
}

form {
position:relative;
width:305px;
margin:15px auto 0 auto;
text-align:center;

}

input {
width:270px;
height:42px;
margin-top:25px;
padding:0 15px;
background:#2d2d2d;
background:rgba(45,45,45,.15);
-moz-border-radius: 6px;
-webkit-border-radius:6px;
text-align:center;
border-radius:6px;
border:1px solid #3d3d3d;
border:1px solid rgba(255,255,255,.15);
-moz-box-shadow:0 2px 3px 0 rgba(0,0,0,.1) inset;
-webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
font-family: 'PT Sans', Helvetica, Arial, sans-serif;
font-size:16px;
color:#fff;
text-shadow:0 1px 2px rgba(0,0,0,.1);
-o-transition: all .2s;
-moz-transition: all .2s;
-webkit-transition: all .2s;
-ms-transition: all .2s;
}

input:-moz-placeholder { color: #fff; }
input:-ms-input-placeholder { color: #fff; }
input::-webkit-input-placeholder { color: #fff; }

input:focus {
outline:none;
-moz-box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
-webkit-box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
box-shadow:
        0 2px 3px 0 rgba(0,0,0,.1) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
}

button {
cursor:pointer;
width:300px;
height:44px;
margin-top:25px;
padding:0;
background:#ef4300;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
border-radius: 6px;
border:1px solid #ff730e;
-moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
-webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
box-shadow:
        0 15px 30px 0 rgba(255,255,255,.25) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
font-family:'PT Sans', Helvetica, Arial, sans-serif;
font-size:14px;
font-weight:700;
color:#fff;
text-shadow:0 1px 2px rgba(0,0,0,.1);
-o-transition: all .2s;
    -moz-transition: all .2s;
    -webkit-transition: all .2s;
    -ms-transition: all .2s;
}

button:hover {
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
}

button:active {
    -moz-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    -webkit-box-shadow:
        0 15px 30px 0 rgba(255,255,255,.15) inset,
        0 2px 7px 0 rgba(0,0,0,.2);
    box-shadow:        
        0 5px 8px 0 rgba(0,0,0,.1) inset,
        0 1px 4px 0 rgba(0,0,0,.1);

    border: 0px solid #ef4300;
}



.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {float: left;font-size: 16px;color: white;text-align: center;padding: 14px 16px;text-decoration: none;}

.dropdown {float: left;overflow: hidden;}

.dropdown .dropbtn {font-size: 16px;border: none;outline: none;color: white;padding: 14px 16px;background-color: inherit;}

.navbar a:hover, .dropdown:hover .dropbtn {background-color: red}

.dropdown-content {display: none;position: absolute;background-color: #f9f9f9;width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;}

.dropdown-content a {float: none;color: black;padding: 12px 16px;text-decoration: none;display: block;text-align: left;}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}


</style>
</head>
<body>

	<div class="page-container">
            
            <form action="update.php" method="post">
			<h1>Edit </h1>
                <input type="text" value="<?php echo $data['f_name'] ?>" name="f_name" class="Name" placeholder="Frist Name" required="">
                <input type="text" value="<?php  echo $data['l_name'] ?>" name="l_name" class="Name" placeholder="Last Name" required="">
                 <input type="text" value="<?php echo $data['email'] ?>" name="email" class="Email" placeholder="Email" required="">
                 <input type="hidden" value="<?php echo $uid ?>" name="id" class="id"  required="">
                 <input type="date" value="<?php echo $data['date_of_b'] ?>" name="date_of_b" class="Date of Birth"  required="">
				
                <button type="submit" value="update" name="update">Edit</button>
            </form>
           <?php

           	if (isset($_POST["update"])){
                
               // var_dump($_POST);
           		$f_name=$_POST["f_name"];
              $l_name=$_POST["l_name"];
              $email=$_POST["email"];
              $date_of_b=$_POST["date_of_b"];
             

             /*  echo $uid;
               echo $f_name;
               echo"<br>";
               echo $l_name;
               echo"<br>";
               echo $email;
               echo"<br>";*/
               

              $id=$_POST["id"];
            echo $date_of_b;
              update($link,$id,$f_name,$l_name,$date_of_b,$email);


                    ?>
                    <script type="text/javascript">

            window.location="index.php";
        </script>   
        <?php  
           
           }
           ?>

</body>
</html>