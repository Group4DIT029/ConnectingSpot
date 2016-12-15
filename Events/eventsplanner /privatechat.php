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

<body class="notconnected">

  <div class="vid-container" height="auto">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
   <div class="publishMAINHEADER1">
  
   
<a href="profile.php"><button type="submit"  value="profile" >Profile</button></a>
<a href="events.php"><button type="submit" value=" events ">Events</button></a>
<a href="publishevent.php"><button type="submit" value="   publish   ">Publish</button></a>
<button type= "button" value="logout" ">logout</button>
       
<br>



<div class="online-users">
<?php
session_start();
$output="";
$usern="";
 $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
      



echo' <div class="container">  
              
                <div class="table-responsive-online">  
                   
                     <div id="live_data1"></div>                 
                </div>  
           </div>';

echo "</div>";
echo "</div>";

  echo '<div class="publish-image">';

 
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from membership where username ='".$_SESSION['username']."'";

      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
           
             echo "<img     height ='240'"."width ='294'"."  src = 'images/".$row['image']."'>";


             echo "<p>"."<font color='yellow' size='2'>"."  fullname       :"."<font color='white' size='4'>".$row['fullname']."</centre>"."</p>";
             echo "<p>"."<font color='yellow'  size='2'>"." date of birth  :"."<font color='white' size='4'>".$row['dob']."</centre>"."</p>";
             echo "<p>"."<font color='yellow'  size='2'>"."  sex  :"."<font color='white' size='4'>".$row['gender']."</centre>"."</p>";
             echo "<p>"."<font color='yellow'  size='2'>"."  phonenumber  :"."<font color='white' size='4'>".$row['phonenumber']."</centre>"."</p>";
             echo "<p>"."<font color='yellow'  size='2'>"."  address  :"."<font color='white' size='4'>".$row['address']."</centre>"."</p>";
             echo "<p>"."<font color='yellow'  size='2'>"."  email  :"."<font color='white' size='4'>".$row['email']."</centre>"."</p>";
            
            
          
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
         $idd = isset($_GET['id']) ? $_GET['id'] : '';
       $sql = "select * from membership where id ='".$idd."'";
             $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<p>"."<font color='white' size='6'>".$row['username']."</font>"."</p>";
             echo "<p>"."<font color='white' >".$row['address']."";
           
            
             echo "<cente><img     height ='150'"."width ='200'"."style='margin:0px 30px '"."  src = 'images/".$row['image']."'></cente>";
            
            
             
            
            
            echo "</div>";
          }
      ?>

      <div class="avgrund-contents">
      <header>

        <font color='#742ECC'><h1>chat</h1></font>
      </header>
       <div class="large-1 columns conniStatus">
        <div id="connectionStatus"></div>
    </div>

      <div class="pr center wrapper">
        <div class="cf pr chat animate">
          <div class="pa chat-shadow">
           
          </div>
          <div class="cf chat-top" style="background-color: blue">
             <fieldset><div class="fl chat-left" >
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
            </fieldset>
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
           <center> <div class="fl chat-submit">
              <button>Send &rarr;</button>
            </div></center>
          </div>
        </div>
      </div>
      
    </div>
    
    <aside id="nickname-popup" class="popup animate avgrund-popup">
     
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
    

   
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>


</body>
</html>
<script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"selectmyevents.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var first_name = $('#first_name').text();  
           var last_name = $('#last_name').text();  
           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(last_name == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.first_name', function(){  
           var id = $(this).data("id1");  
           var first_name = $(this).text();  
           edit_data(id, first_name, "first_name");  
      });  
      $(document).on('blur', '.last_name', function(){  
           var id = $(this).data("id2");  
           var last_name = $(this).text();  
           edit_data(id,last_name, "last_name");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           
                $.ajax({  
                     url:"chatuserdetail.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function myJavascriptFunction() { 

  //window.location.href = "chatuserdetail.php?id=" + id;

                     }  
                });  
            
      });  

    
 });  
 </script>  



 <script>  
 $(document).ready(function(){  
      function fetch_datas()  
      {  
           $.ajax({  
                url:"onlinestatus.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data1').html(data);  
                }  
           });  
      }  
      fetch_datas();  
      $(document).on('click', '#btn_add', function(){  
           var first_name = $('#first_name').text();  
           var last_name = $('#last_name').text();  
           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(last_name == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.first_name', function(){  
           var id = $(this).data("id1");  
           var first_name = $(this).text();  
           edit_data(id, first_name, "first_name");  
      });  
      $(document).on('blur', '.last_name', function(){  
           var id = $(this).data("id2");  
           var last_name = $(this).text();  
           edit_data(id,last_name, "last_name");  
      });  
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
                $.ajax({  
                     url:"selectmyeventdetails.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function myJavascriptFunction() { 

  window.location.href = "eventdetails.php?id=" + id;

                     }  
                });  
             
      });  

      $(document).on('click', '.btn_chat', function(){  
           var id=$(this).data("id3");  
                $.ajax({  
                     url:"chatuserdetail.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function myJavascriptFunction() { 

  window.location.href = "privatechat.php?id=" + id;

                     }  
                });  
             
      });  

 }); 


 </script>  
 <script type="text/javascript">
var n = 0;
function increaseNumber(){
  n=n+1;
  document.getElementById('number').innerHTML= n;
  zeroNumber();
}
  function zeroNumber(){
  if(document.getElementById('number').innerHTML==0){
  document.getElementById('box').style.display="none";
  
  }
  else{
  document.getElementById('box').style.display="block";
  }
  }
  </script>
 