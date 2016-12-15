<?php  
 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 $sql = "INSERT INTO membership(username, fullname) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>  