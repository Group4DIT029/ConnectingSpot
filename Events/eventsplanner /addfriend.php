<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 //$sql = "DELETE FROM membership WHERE id = '".$_POST["id"]."'";

 $sql = "INSERT into friendship (friends_id, my_id) VALUES(".$_SESSION['id'].",".$_POST["id"]."  )";
 if(mysqli_query($connect, $sql))
 {  
    
 }  
 ?> 