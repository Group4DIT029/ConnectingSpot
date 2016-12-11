
<html>  
      <head>  
           <title></title>  
           <link rel="stylesheet" href="css/style.css">
           <link rel="stylesheet" href="style.css">
   
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
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

<div class="online-users">
<?php
session_start();
$output="";
$usern="";
 $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from membership where password = 111";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<a href ='eventdetails.php' >"."<div id='img_div'>";
            echo "<img id='img-online'  height='50px' width ='50px' src='images/".$row['image']."'>";
             echo "<p>"."<font color='blue'>".$row['username']."</p>";
            echo "</div>"."</a>";
          }

echo "</div>".

"</div>"

  ."<div class='publish-image'>";
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



   echo   "<h1>Search Results</h1>";

    
     
          
      ?>
           <div class="container">  
              
                <div class="table-responsive">  
                   
                     <div id="live_data"></div>                 
                </div>  
           </div>  
           </div>
           </div>
           </div>

      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_addfooriend', function(){  
             var id=$(this).data("id3");    
          
           $.ajax({  
                url:"addfiriend.php",  
                method:"POST",  
                //data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert("you have successfullly added friendship");  
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
                     url:"select_details.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function myJavascriptFunction() { 


  var javascriptVariable = //<?php echo $row['id']; ?>;
  window.location.href = "friends.php?id=" + id;
//}
                     }  
                });  
         
      });  

            $(document).on('click', '.btn_addfriend', function(){  
           var id=$(this).data("id3");  
           var online_userid = $(this).data("id4");  
          
                 $.ajax({  
                     url:"addfriend.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function myJavascriptFunction() { 


  confirm("added friend successfully");
//}
                     }  
                });  
         
      });  
 });  
 </script>  