<?php  
 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 $sql = "SELECT * FROM events WHERE event_id = '".$_POST["event_id"]."'";  
 $_SESSION['id'] = $row['id'];
 if(mysqli_query($connect, $sql))  
 { 
 
 }  
 ?> 