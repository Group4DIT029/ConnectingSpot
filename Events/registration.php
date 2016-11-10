<?php
$msg ="";

$name= "";
$username1= "";
$password1="";
$gender= "";
$email="";
$telephone= "";
$address= "";
$confirm= "";
$date= "";

if(isset($_POST['signup'])=="signup")
{
  $target = "images/".basename($_FILES['image']['name']);

$image =  $_FILES['image']['name'];
$name= $_POST['fullname'];
$username1= $_POST['username'];
$gender= $_POST['gender'];
$email= $_POST['email'];
$telephone= $_POST['mobile'];
$address= $_POST['address'];
$password1= $_POST['password'];
$confirm= $_POST['confirmpass'];
$date= $_POST['date'];


$sql= "INSERT into membership (image, fullname, username, dob, gender, phonenumber, address, email, password,confirmpass) values
('$image','$name','$username1' ,'$date','$gender','$email','$telephone' ,'$address','$password1','$confirm')
  ";

$cn=mysqli_connect("ns1.domain.com", "root", "anita");
mysqli_select_db($cn, "event_app");
if(mysqli_query($cn, $sql));

if (move_uploaded_file( $_FILES['image']['tmp_name'],   $target)){
            echo "Image uploaded successfully";
        }
        else{
            echo "There was a problem uploading image";
        }
 
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Regisration</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="registration-inner-container" >
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Personal Details</h1>
      <table width="20"   height="20"><tbody width="20"   height="20">
      <td width="20"   height="20">
          <div   class =img-div">
       <?php
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from membership";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            
            echo "<img     height ='150'"."width ='150'"."style='margin:0px 170px '"."  src = 'images/".$row['image']."'>";
    
           
          }
      ?>
       </div>
      </td>
      </tbody>
      </table>

      <form action ="registration.php" method="post" enctype="multipart/form-data">
      <input type ="hidden" name ="size" value ="1000000">
      <input type = "file" name="image">
      <input type="text" placeholder="Fullname" name= "fullname"/>
      <input type="text" placeholder="Username" name= "username"/>
      <input type="text" placeholder="Gender" name= "gender"/>
       <input type="text" placeholder="Email" name= "email"/>
      <input type="text" placeholder="Date of Birth" name= "date"/>
       <input type="text" placeholder="Mobile" name= "mobile"/>
       <input type="text" placeholder="Address" name= "address"/>
      <input type="text" placeholder="Password" name= "password"/>
      <input type="text" placeholder="Confirm Password" name= "confirmpass"/>
      <button type= "submit" name= "signup">Sign Up</button>
       </form>
      <p>Want to publish Event? <a href="publishevent.php"><span>ADD</span></a></p>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

</body>
</html>
