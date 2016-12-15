<?php



          if( isset($_POST['update'])=="update" )
          {
          $id             = $row['id'];
          $newFullname    = $_POST['newFullname'];
          $newUsername    = $_POST['newUsername'];
          $newGender      = $_POST['newGender'];
          $newEmail       = $_POST['newEmail'];
          $newDate        = $_POST['newDate'];
          $newMobile      = $_POST['newMobile'];
          $newAddress     = $_POST['newAddress'];
          $newPassword    = $_POST['newPassword'];
          $newConfirmpass = $_POST['newConfirmpass'];
          $sql = "UPDATE membership SET fullname='$newFullname', username='$newUsername', 
          gender = '$newGender', email ='$newEmail' , dob ='$newDate', phonenumber ='$newMobile',
          address ='$newAddress', password ='$newPassword', confirmpass = '$newConfirmpass'  WHERE id ='$id'";
          
        $cn=mysqli_connect("localhost", "root", "");
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
  <title>Edit</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="edit_profile-inner-container" >
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
      <h1>Personal Details</h1>
      <table width="20"   height="20"><tbody width="20"   height="20">
      <td width="20"   height="20">
          <div   class =img-div">
       <?php
 $cn=mysqli_connect("ns1.domain.com", "root", "anita");
        mysqli_select_db($cn, "afronavia");
       $sql = "select * from membership where username=111";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            
            echo "<img     height ='150'"."width ='150'"."style='margin:0px 170px '"."  src = 'images/".$row['image']."'>";
    
    
				 $_id1    =   $row['id'];
                 $_fn    =    $row['fullname'];
                 $_dob   =    $row['dob'];
             	 $_gen   =	  $row['gender'];
                 $_pn    =    $row['phonenumber'];
                 $_add   =    $row['address'];
                 $_em    =    $row['email'];
                 $_un    =    $row['username'];
            	 $_pass  =    $row['password'];
            	 $_cpass =    $row['confirmpass'];
          }

      ?>
      </td>
      </tbody>
      </table>

      <form action ="edit_profile.php" method="post" enctype="multipart/form-data">
      <input type ="hidden" name ="size" value ="1000000">
      <input type = "file" name="image" >
      <input type="text"  name= "newFullname" value = "<?php echo $_fn; ?>"/>
      <input type="text"  name= "newUsername" value = "<?php echo $_un; ?>"/>
      <input type="text"  name= "newGender" value = "<?php echo $_gen; ?>"/>
       <input type="text"  name= "newEmail" value = "<?php echo $_em; ?>"/>
      <input type="text"  name= "newDate" value = "<?php echo $_dob; ?>"/>
       <input type="text"  name= "newMobile" value = "<?php echo $_pn; ?>"/>
       <input type="text"  name= "newAddress" value = "<?php echo $_add; ?>"/>
      <input type="text"  name= "newPassword" value = "<?php echo $_pass; ?>"/>
      <input type="text"  name= "newConfirmpass" value = "<?php echo $_cpass; ?>"/>
       </form>
      
      <p> <a href="profile.php"><button type= "submit" name= "signup">Update</button></a></p>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

</body>
</html>
