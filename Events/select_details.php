<?php  
 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 $sql = "SELECT * FROM membership WHERE id = '".$_POST["id"]."'";  
 $_SESSION['id'] = $row['id'];
 if(mysqli_query($connect, $sql))  
 { 
 $_SESSION['id'] = $row['id'];  
       
 }  
 ?> 