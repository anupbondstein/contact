<?php
function delete($link,$uid)
{
  //echo "inside function unfrnd";
  $sql = mysqli_query($link,"DELETE FROM user_info WHERE id =$uid");
  echo"sql done";
  
}

function update($link,$id,$f_name,$l_name,$date_of_b,$email)
{
  $sql=mysqli_query($link,"UPDATE user_info set f_name='$f_name',l_name='$l_name',date_of_b='$date_of_b',email='$email' where user_info.id ='$id' ");
  
}


?>