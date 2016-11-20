<?php
session_start();
$output="";
$usern="";
    $msg ="";
//upload picture is button pressed

?>
 
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Event Details</title>
  
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />
                <link href="library/css/animate.css" rel="stylesheet" type="text/css" />
                <link href="styles/style.css" rel="stylesheet" type="text/css" />
  
</head>

<body>
 
  <div class="publishMAINHEADER1">
<a href="profile.php"><button type="submit"  value="profile" >Profile</button></a>
<a href="events.php"><button type="submit" value=" products ">Events</button></a>
<a href="publishevent.php"><button type="submit" value="   bloq   ">Publish</button></a>
<a href="index.php"><button type="submit" value="contact us">Logout</button></a>
<br>

</div>
  <div class="publish-image">

  <?php
      $cn=mysqli_connect("sql7.freemysqlhosting.net", "sql7143923", "CpwyetWP7P");
        mysqli_select_db($cn, "sql7143923");
       $sql = "select * from membership where username ='".$_SESSION['username']."'";

      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
        
             echo "<p>"."  fullname       :".$row['fullname']."</centre>"."</p>";
             echo "<p>"." date of birth  :".$row['dob']."</centre>"."</p>";
             echo "<p>"."  sex  :".$row['gender']."</centre>"."</p>";
             echo "<p>"."  phonenumber  :".$row['phonenumber']."</centre>"."</p>";
             echo "<p>"."  address  :".$row['address']."</centre>"."</p>";
             echo "<p>"."  email  :".$row['email']."</centre>"."</p>";
            
            
            echo "</div>";
          }
      ?>
</div>
  
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
            <div id ="content">
    
     <?php
      $cn=mysqli_connect("sql7.freemysqlhosting.net", "sql7143923", "CpwyetWP7P");
        mysqli_select_db($cn, "sql7143923");
       $sql = "select * from events where event_id=1" ;//"'".$_SESSION['event_id']."'";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<p>"."<font color='blue' size='2'>"."  eventname       :  "."</font>"."<font color='white' size='6'>".$row['event_name']."</font>"."</p>";
             echo "<p>".$row['category']."</p>";
             echo "<p>".$row['date']."</p>";
             echo "<p>".$row['time']."</p>";
             echo "<p>".$row['venue']."</p>";
           
            
            
             echo "<p>".$row['description']."</p>";
             
            
            
            echo "</div>";
          }
      ?>

	
		
	 <header>
        <h1>ConnectingSpot</h1>
</header>
			<div class="pr center wrapper">
				<div class="cf pr chat animate">
					<div class="pa chat-shadow">
						<div class="content animate bounceInDown">Click <div class="big-button-green start">Start</div> to begin...</div>
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
									<div class="fl">See all Users   &rarr;</div>
                                                                        <div class="fr le-button">0</div>
								</div>
								<ul></ul>
							</div>
							<div class="chat-rooms">
								<div class="cf title">
									<div class="fl">Rooms</div>
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
			
		
		
		

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
                <script type="text/javascript" src="library/js/jquery.tmpl.min.js"></script>
        <script type="text/javascript" src="library/js/mqttws31.js"></script>
        <script type="text/javascript" src="library/js/encoder.js"></script>
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
	
		</script>
		
	</body>
</html>