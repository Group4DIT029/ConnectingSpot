
<?php
session_start();
$output="";
$usern="";
//function validateUser($Username, $Password)
//function loggedin(){
if(isset ($_POST['login'])== "login"){
$cn=mysqli_connect("localhost" ,"root", "");
mysqli_select_db($cn, "event_app");


$sql=mysqli_query($cn, "select * from membership where  username = '".$_POST['username']."' AND 
  password = '".$_POST['password']."'");


$num_row=mysqli_num_rows($sql);
if($num_row>=1){


$row=mysqli_fetch_assoc($sql);

$_SESSION['username'] = $row['username']; 
$_SESSION['fullname'] = $row['fullname']; 
$_SESSION['id'] = $row['id']; 
$_SESSION['loggedin'] = true; 

//handle the status of user whether logged in or out
$cn=mysqli_connect("localhost" ,"root", "");
mysqli_select_db($cn, "event_app");
$status = mysqli_query($cn, "UPDATE `membership` SET `status` = '1' WHERE
 membership.username = '".$_POST['username']."'");



header('Location:mysubscriptions.php');
 // echo $_SESSION['username'];

if ($_SESSION['loggedin'] && $_SESSION['username']) 
        //logoutUser(); 
        $output .= '<h1>Logged out!</h1><br />You have been logged out successfully.  
            <br /><h4>Would you like to go to <a href="index.php">site index</a>?</h4>';

}
else{
  $status = mysqli_query($cn, "UPDATE `membership` SET `status` = '1' WHERE
 membership.username = '".$_POST['username']."'");
  echo '<script>
 alert("invalid password or username");

</script>';
}
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Events Planner</title>
 
      <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Login</h1>
      <form action="index.php" method="post">
      <input type="text" placeholder="Username" name= "username" />
      <input type="password" placeholder="Password" name= "password"/>
      <center><button type= "submit" id ="styled-button" name= "login">Login</button></center>
       </form>
      <p>Not a member? <a href="registration.php"><span> <font color="#742ECC">Sign Up</font></span></a></p>
    </div>
   
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

</body>
</html>
