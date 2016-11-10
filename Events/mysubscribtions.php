
<?php
    $msg ="";
//upload picture is button pressed
  if (isset($_POST['upload'])){
//path to store the uploaded image
    $target = "images/".basename($_FILES['image']['name']);

    //connect to database
    $cn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($cn, "event_app");

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
  <?php
session_start();
$output="";

//echo $_SESSION['username1'];
if (isset($_SESSION['loggedin']) && isset($_SESSION['username'])) 
 { 
 
  $output = '<fieldset><font size= "2">Welcome! </font><b><font color= "yellow">' . $_SESSION['username1'] . '</font></b><font size= "2"> you are logged in now.<br> 
  Will you like to <a href="improved1.php">Logout?</a></font></fieldset>'; 
  
 
  }
  echo $output;

//session_start();
$cn=mysqli_connect("localhost" ,"root", "");
mysqli_select_db($cn, "afronavia");

?>
  <div class="publishMAINHEADER1">
<a href="pop-up.htm"><button type="submit"   color="#742ECC">home </button></a>
<a href="products.php"><input type="submit" value=" products "></a>
<a href="blog.php"><input type="submit" value="   bloq   "></a>
<a href="contactus.php"><input type="submit" value="contact us"></a>
<br>
<a id="connectButton" class="small button" onclick="websocketclient.connect();"><font color ="white" background-color="green">Click to get event updates</font></a>

</div>
  <div class="publish-image">

  <?php
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from membership where username=111";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<div class ='img_div'>";
             echo "<img     height ='240'"."width ='280'"."  src = 'images/".$row['image']."'>";
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
  <div class="eventdetails-inner-container" >
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Publish New Event</h1>
     <div id ="content">
    
     <?php
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from events";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<a href ='eventdetails.'>"."<div class ='img_div'>";
            echo "<img height ='200'"." width = '200'"." src = 'images/".$row['image']."'>";
             echo "<p>".$row['description']."</p>";
            
            echo "</div>"."</a>";
          }
      ?>
    <form method ="post" action = "publishevent.php" enctype="multipart/form-data">
      <input type ="hidden" name ="size" value ="1000000">
    <div>
      <input type = "file" name="image">
      </div>
      <div>
      <textarea name="text" cols="100" placeholder ="say something about event......" ></textarea>
      </div>
      <div>
      <button type = "submit" name = "upload" value="Upload Image">Upload Image</button>
    </div>
    </form>
    </div>
      
      <p>Want to see your profile? <a href="profile.php"><span>PROFILE</span></a></p>
    </div>
  </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

</body>
</html>
