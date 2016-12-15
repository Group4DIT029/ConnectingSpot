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
<p> <a href="edit_profile.php"><button>Edit</button></a></p>
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
 $msg ="";
    session_start();
  $output="";
    $msg ="";
$cn=mysqli_connect("localhost" ,"root", "");
mysqli_select_db($cn, "events_app");

//ßecho $_SESSION['username1'];
if (isset($_SESSION['loggedin']) && isset($_SESSION['username'])) 
 { 
 
 
 
  $output = "<br>"."<fieldset><font size= '2'>Welcome! </font><b><font color= 'yellow'>". $_SESSION['username'] .$_GET['id']. "</font></b><font size= '2'> you are logged in now</fieldset>"; 
   
  }
  echo $output;



?>
      <h1>Profile</h1>
     
     <?php
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");

        $idd = isset($_GET['id']) ? $_GET['id'] : '';
        echo $idd;
       $sql = "select * from membership where id ='".$idd."'";
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

      <div class="container">  
              
                <div class="profile_detail">  
                   
                     <div id="live_data"></div>                 
                </div>  
   
    </div>

    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

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
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"select_details.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:
                          function myJavascriptFunction() { 
  var javascriptVariable = $(this).data("id3"); 
  window.location.href = "friends.php?profile_id=" + javascriptVariable; 
//}
                     }  
                     }  
                });  
           }  
      });  
 });  
 </script>  
