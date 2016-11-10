
<?php
session_start();
$output="";
$usern="";
//function validateUser($Username, $Password)
//function loggedin(){
if(isset ($_POST['login'])== "login"){
$cn=mysqli_connect("sql7.freemysqlhosting.net" ,"sql7143923", "CpwyetWP7P");
mysqli_select_db($cn, "sql7143923");

$sql=mysqli_query($cn, "select username from membership where  username = '".$_POST['username']."'");
$num_row=mysqli_num_rows($sql);

if($num_row>=1){
  //echo"welcome";
$row=mysqli_fetch_assoc($sql);
$_SESSION['username'] = $row['username']; 
$_SESSION['loggedin'] = true; 
header('Location:mysubscriptions.php');
 // echo $_SESSION['username'];

if ($_SESSION['loggedin'] && $_SESSION['username']) 
        //logoutUser(); 
        $output .= '<h1>Logged out!</h1><br />You have been logged out successfully.  
            <br /><h4>Would you like to go to <a href="index.php">site index</a>?</h4>';




}
else{
echo"invalid password@";
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
      <input type="text" placeholder="Username" name= "username"/>
      <input type="text" placeholder="Password" name= "password"/>
      <button type= "submit" name= "login">Login</button>
       </form>
      <p>Not a member? <a href="registration.php"><span>Sign Up</span></a></p>
    </div>
   
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

</body>
</html>
