<?php  
 $cn = mysqli_connect("localhost", "root", "", "event_app"); 

 $status = mysqli_query($cn, "UPDATE membership SET status = 1  where
 username = '".$_SESSION['username']."'");
 if(mysqli_query($cn, $status))  
 {  
    
 }  
 ?> 