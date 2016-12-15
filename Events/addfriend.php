<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 //$sql = "DELETE FROM membership WHERE id = '".$_POST["id"]."'";

 $sql = "INSERT into friendship (friends_id) VALUES(".$_SESSION['id']."  )";
 if(mysqli_query($connect, $sql))
 {  
    
 }  
 ?> 