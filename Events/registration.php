<?php
$msg ="";

$name= "";
$username1= "";
$password1="";
$gender1= "";
$email1="";
$telephone= "";
$address1= "";
$confirm= "";
$date1= "";


if(isset($_POST['signup'])=="signup")
{
  $target = "images/".basename($_FILES['image']['name']);

$image =  $_FILES['image']['name'];
$name= $_POST['fullname'];
$username1= $_POST['username'];
$date1= $_POST['date'];
$gender1= $_POST['gender'];
$telephone= $_POST['mobile'];
$address1= $_POST['address'];
$email1= $_POST['email'];
$password1= $_POST['password'];
$confirm= $_POST['confirmpass'];


//$confirm = hash('gost',$confirm);

if($password1 == $confirm){
  $password1 = password_hash($password1, PASSWORD_DEFAULT);
  $confirm = password_hash($confirm, PASSWORD_DEFAULT);

  $sql= "INSERT into membership (image, fullname, username, dob, gender, phonenumber, address, email, password,confirmpass) values
  ('$image','$name','$username1' ,'$date1','$gender1','$telephone' ,'$address1','$email1','$password1','$confirm')
    ";
}
else{
  echo "Password missmatch.";

}

$cn=mysqli_connect("localhost", "root", "");
mysqli_select_db($cn, "event_app");
if(mysqli_query($cn, $sql));

if (move_uploaded_file( $_FILES['image']['tmp_name'],   $target)){
            echo '<script>
 alert("Image Upload was sucessful");

</script>';
//keep logged info in session to assist user to log in 
//$_SESSION['username'] = $row['username']; 
//$_SESSION['fullname'] = $row['fullname']; 

          header('Location:index.php');
        }
        else{
            echo '<script>
 alert("Image Upload encountered error");

</script>';
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
q

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
      <button id= "styled-button" type= "submit" name= "signup">Sign Up</button>
       </form>
      <p>signing up for to this application means you have accepted the rules and regulations of F.U.P.E.S</p>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

</body>
</html>
