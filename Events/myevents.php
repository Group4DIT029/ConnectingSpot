
<?php
 session_start();
  $output="";
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
  <title>My Subscriptions</title>
  
      <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="style.css">
       
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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

</div>
  <div class="publish-image">

  <?php
 
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from membership where username='".$_SESSION['username']."'";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
           
             echo "<img     height ='240'  width =150  src = 'images/".$row['image']."'>";


             echo "<p>"."<font color='blue' size='2'>"."  fullname       :"."<font color='green' size='4'>".$row['fullname']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"." date of birth  :"."<font color='green' size='4'>".$row['dob']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"."  sex  :"."<font color='green' size='4'>".$row['gender']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"."  phonenumber  :"."<font color='green' size='4'>".$row['phonenumber']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"."  address  :"."<font color='green' size='4'>".$row['address']."</centre>"."</p>";
             echo "<p>"."<font color='blue' size='2'>"."  email  :"."<font color='green' size='4'>".$row['email']."</centre>"."</p>";
            
            
          
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
      <h1>My Events</h1>

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
      function get_event_id(id)  
      {  
           $.ajax({  
                url:"eventnavigation.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
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
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>  
