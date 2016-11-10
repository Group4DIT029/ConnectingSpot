<?php
    $msg ="";
    session_start();
  $output="";
    $msg ="";
//upload picture is button pressed
  if (isset($_POST['upload'])){
//path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    //connect to database
    $cn = mysqli_connect("sql7.freemysqlhosting.net", "sql7143923", "CpwyetWP7P");
    mysqli_select_db($cn, "sql7143923");

    //get all the submitted data from the form
      $image =  $_FILES['image']['name'];
      $text =   $_POST['text'];

        $sql = "INSERT INTO events (image, description) VALUES ('$image' ,    '$text')";
        mysqli_query( $cn,  $sql);

    //Now lets move the uploaded image into the folder: images
        if (move_uploaded_file( $_FILES['image']['tmp_name'],   $target)){
            $msg = "Image uploaded successfully";
        }
        else{
            $msg = "There was a problem uploading image";
        }
 

  }

?>
 
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Add Event</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="vid-container" height="auto">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="MAINHEADER">

<div class="MAINHEADER1">
<a href="profile.php"><button type="submit"  value="profile" >Profile</button></a>
<a href="events.php"><button type="submit" value=" products ">Events</button></a>
<a href="publishevent.php"><button type="submit" value="   bloq   ">Publish</button></a>
<a href="index.php"><button type="submit" value="contact us">Logout</button></a>
<br>
<br>

</div>
  <div class=" four">

<a href="herbal.php"><img src="image/students.jpg" height="100px" width="120px" margin-top="100px" >
<br>
<center>Student Meetings</center></a>
<a href="webdesign.php"><img src="image/webdesign.jpg" height="100px" width="120px" >
<center>Web Design &<br> Software </a></center>

<a href="afronaviaonlineradio.php"><img src="image/meeting.jpg" height="100px" width="120px" ></center>
<center>Meetings</a></center>
</div>

<div class="six">
<center>
<a href="mendress.php"><img src="image/birthday.jpg" height="100px" width="120px" ><br>
Birthdays</center></a>

<center>
<a href= "meeting.php"><img src="image/club.jpg" height="100px" width="120px" ><br>
Club Events</a></center>

<center>
<a href="wacc.php"><img src="image/meeting.jpg" height="100px" width="120px" ><br>
Meetings</center></a>

</div>

  <div class="eventdetails-inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
     <?php

$cn=mysqli_connect("sql7.freemysqlhosting.net" ,"sql7143923", "CpwyetWP7P");
mysqli_select_db($cn, "sql7143923");

//ßecho $_SESSION['username1'];
if (isset($_SESSION['loggedin']) && isset($_SESSION['username'])) 
 { 
 
 
 
  $output = "<br>"."<fieldset><font size= '2'>Welcome! </font><b><font color= 'yellow'>". $_SESSION['username'] . "</font></b><font size= '2'> you are logged in now</fieldset>"; 
   
  }
  echo $output;



?>
      <h1>Profile</h1>
     <div id ="content">
    
     <?php
      $cn=mysqli_connect("sql7.freemysqlhosting.net", "sql7143923", "CpwyetWP7P");
        mysqli_select_db($cn, "sql7143923");
       $sql = "select * from membership where username=111";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<div class ='img_div'>";
             echo "<img     height ='400'"."width ='650'"."style='margin:0px 50px '"."  src = 'images/".$row['image']."'>";
             echo "<p>".$row['fullname']."</p>";
             echo "<p>".$row['dob']."</p>";
             echo "<p>".$row['gender']."</p>";
             echo "<p>".$row['phonenumber']."</p>";
             echo "<p>".$row['address']."</p>";
             echo "<p>".$row['email']."</p>";
            
            
            echo "</div>";
          }
      ?>
   
    </div>
      
     
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

</body>
</html>
