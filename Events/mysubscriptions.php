
<?php  
session_start();
$output="";
$usern="";

 ?> 
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>My Subscriptions</title>

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="style.css">

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
 $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
      



echo' <div class="container">  
              
                <div class="table-responsive-online">  
                   
                     <div id="live_data1"></div>                 
                </div>  
           </div>';

echo "</div>";
echo "</div>";

  echo "<div class='publish-image'>";

  
       $sql = "select * from membership where username='".$_SESSION['username']."'";
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



   echo   "<font color='#742ECC'><h1>My Events</h1></font>";

      ?>

      <div class="container">  
              
                <div class="table-responsive">  
                   
                     <div id="live_data"></div>                 
                </div>  
           </div> 

           <div class="container">  
    
    <div class="table-responsive-online">  
                   
                     <div id="live_data"></div>                 
                </div> 
    </div>

    <div class="container">  
              
                <div class="table-responsive">  
                   
                     <div id="live_data"></div>                 
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
                     url:"selectmyeventdetails.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function myJavascriptFunction() { 


  var javascriptVariable = //<?php echo $row['id']; ?>;
  window.location.href = "groupchat.php?id=" + id;
//}
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
      $(document).on('click', '.btn_chat', function(){  
           var id=$(this).data("id3");  
                $.ajax({  
                     url:"chatuserdetail.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function myJavascriptFunction() { 


  var javascriptVariable = //<?php echo $row['id']; ?>;
  window.location.href = "privatechat.php?id=" + id;
//}
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
  <script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){

            $.ajax({
                type: 'POST',
                url: 'logout.php',
                success: function(data) {
                  window.location.href = "index.php";

                }
            });
   });
});
</script>