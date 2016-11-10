<?php
session_start();
$output="";
$usern="";
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
  <title>Event Details</title>
  
      <link rel="stylesheet" href="css/style.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />
    <link href="styles/animate.css" rel="stylesheet" type="text/css" />

 
    <link href="styles/avgrund.css" rel="stylesheet" type="text/css" />
  
</head>

<body>
  <div class="vid-container" height="auto">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="publishMAINHEADER1">
<a href="profile.php"><button type="submit"  value="profile" >Profile</button></a>
<a href="events.php"><button type="submit" value=" products ">Events</button></a>
<a href="publishevent.php"><button type="submit" value="   bloq   ">Publish</button></a>
<a href="index.php"><button type="submit" value="contact us">Logout</button></a>
<br>

</div>
  <div class="publish-image">

  <?php
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from membership where username ='".$_SESSION['username']."'";

      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<div class ='img_div'>";
              echo "<img     height ='240'"."width ='294'"."  src = 'images/".$row['image']."'>";


             echo "<p>"."<font color='blue' size='2'>"."  fullname       :"."<font color='green' size='4'>".$row['fullname']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"." date of birth  :"."<font color='green' size='4'>".$row['dob']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"."  sex  :"."<font color='green' size='4'>".$row['gender']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"."  phonenumber  :"."<font color='green' size='4'>".$row['phonenumber']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"."  address  :"."<font color='green' size='4'>".$row['address']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"."  email  :"."<font color='green' size='4'>".$row['email']."</centre>"."</p>";
            
            
            
            echo "</div>";
          }
      ?>
</div>
  <div class="eventdetails-inner-container" >
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
     <?php

$cn=mysqli_connect("localhost" ,"root", "");
mysqli_select_db($cn, "afronavia");

//ßecho $_SESSION['username1'];
if (isset($_SESSION['loggedin']) && isset($_SESSION['username'])) 
 { 
 
 
 
  $output = "<br>"."<fieldset><font size= '2'>Welcome! </font><b><font color= 'yellow'>". $_SESSION['username'] . "</font></b><font size= '2'> you are logged in now</fieldset>"; 
   
  }
  echo $output;



?>
            <div id ="content">
    
     <?php
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from events where event_id=1" ;//"'".$_SESSION['event_id']."'";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<p>"."<font color='blue' size='2'>"."  eventname       :  "."</font>"."<font color='white' size='6'>".$row['event_name']."</font>"."</p>";
             echo "<p>".$row['category']."</p>";
             echo "<p>".$row['date']."</p>";
             echo "<p>".$row['time']."</p>";
             echo "<p>".$row['venue']."</p>";
           
            
             echo "<img     height ='400'"."width ='700'"."style='margin:0px 30px '"."  src = 'images/".$row['image']."'>";
            
             echo "<p>".$row['description']."</p>";
             
            
            
            echo "</div>";
          }
      ?>

      <div class="avgrund-contents">
      <header>
        <h1>chat</h1>
      </header>
      <div class="pr center wrapper">
        <div class="cf pr chat animate">
          <div class="pa chat-shadow">
            <div class="content animate bounceInDown"><button class="big-button-green start">Subscribe</button> </div>
          </div>
          <div class="cf chat-top">
            <div class="fl chat-left">
              <div class="chat-messages">
                <ul></ul>
              </div>
            </div>
            <div class="fl chat-right">
              <div class="chat-clients">
                <div class="cf title">
                  <div class="fl"></div>
                </div>
                <ul></ul>
              </div>
              <div class="chat-rooms">
                <div class="cf title">
                  <div class="fl"></div>
                  <div class="fr title-button"></div>
                </div>
                <ul class="pr"></ul>
              </div>
            </div>
          </div>
          <div class="cf chat-bottom">
            <div class="fl chat-input">
                            <input type="text" placeholder="compose message..." />
            </div>
                        <div class="fl chat-upload">
                            <label for="file-input" style="display: block; margin-top: 15px">
                                <img src="images/cam32.png" style="display: block; margin: auto"/>
                            </label>
                            <input id="file-input" style="display: none;" type="file" name="attachment[]" multiple="1" accept="image/*">
                            
                        </div>
            <div class="fl chat-submit">
              <button>Send &rarr;</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    <aside id="nickname-popup" class="popup animate avgrund-popup">
      <div class="title">Enter a nickname</div>
      <div class="content">Please select a nickname, up to 15 characters</div>
      <div class="input"><input type="text" maxlength="15" placeholder="nickname..." /></div>
      <div class="big-button-green small begin">&mdash; Begin &mdash;</div>
    </aside>
    <aside id="addroom-popup" class="popup animate avgrund-popup avgrund-popup-room">
      <div class="title">Enter a room name</div>
      <div class="content">Room name up to 10 characters</div>
      <div class="input"><input type="text" maxlength="10" placeholder="room name..." /></div>
      <div class="input"><input type="checkbox" id="passwordProtection" onclick="togglePasswordField(this)"> Add password</div>
      <div class="input"><input id="password" type="password" maxlength="20" placeholder="password" style="display: none;"/></div>
      <div class="big-button-green small create">Create &rarr;</div>
    </aside>
    <aside id="password-popup" class="popup animate avgrund-popup">
      <div style="display: none;" class="room-name"></div>
      <div class="popup-title"></div>
      <div class="input"><input type="password" maxlength="20" placeholder="password" /></div>
      <div class="big-button-green small join">Join</div>
    </aside>
    <div class="avgrund-cover"></div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.tmpl.min.js"></script>
        <script type="text/javascript" src="scripts/mqttws31.js"></script>
        <script type="text/javascript" src="scripts/encoder.js"></script>
        <script type="text/javascript" src="scripts/avgrund.js"></script>
    <script type="text/javascript" src="scripts/chat.io.js"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <script type="text/javascript">
      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
    <script type="text/javascript">
    $('h1 sup').on('click', function () {
      if($('.chat').hasClass('bounceOutRight')){
        $('.chat').removeClass('bounceOutRight');
        $('.chat').addClass('bounceInLeft');
        
        $('.info').removeClass('bounceInLeft');
        $('.info').addClass('bounceOutRight');
        
        window.setTimeout(function(){
          $('.chat').removeClass('bounceInLeft');
        }, 1500);
      } else {
        $('.chat').removeClass('bounceInLeft');
        $('.chat').addClass('bounceOutRight');
        
        $('.info').removeClass('bounceOutRight');
        $('.info').addClass('bounceInLeft');
      }
      
    });
    function togglePasswordField(input){
      var $input = $(input);
      if ($input.prop('checked')){
        $('.avgrund-popup-room').height(300);
        $('#password').show();
      } else {
        $('#password').hide();
        $('.avgrund-popup-room').height(200);
      }
    }
    </script>

   
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>


</body>
</html>
