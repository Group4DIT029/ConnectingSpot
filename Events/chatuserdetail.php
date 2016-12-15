<?php  
 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 $sql = "SELECT * FROM membership WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?> 