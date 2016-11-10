<?php
 		$msg ="";
//upload picture is button pressed
  if (isset($_POST['upload'])){
//path to store the uploaded image
  	$target = "images/".basename($_FILES['image']['name']);

  	//connect to database
  	$cn = mysqli_connect("localhost", "root", "");
  	mysqli_select_db($cn, "event_app");

  	//get all the submitted data from the form
  		$image = 	$_FILES['image']['name'];
  		$text = 	$_POST['text'];

  			$sql = "INSERT INTO events (image, description) VALUES ('$image' ,  	'$text')";
  			mysqli_query(	$cn, 	$sql);

  	//Now lets move the uploaded image into the folder: images
  			if (move_uploaded_file(	$_FILES['image']['tmp_name'], 	$target)){
  					$msg = "Image uploaded successfully";
  			}
  			else{
  					$msg = "There was a problem uploading image";
  			}
 

  }

?>
 

<!DOCTYPE html>
<html>
<head>
		<title>publish events</title>
		<link rel="stylesheet" type ="text/css" href="style.css">
		</head>
		<body>
		<div id ="content">
		
		 <?php
      $cn=mysqli_connect("localhost", "root", "");
        mysqli_select_db($cn, "event_app");
       $sql = "select * from events";
      $result = mysqli_query($cn, $sql);
     // $num_row=mysqli_num_rows($sql);
          while($row = mysqli_fetch_array($result)){
            echo "<div id='img_div'>";
              echo "<img  src='images/".$row['image']."'>";
              echo "<p>".$row['description']."</p>";
            echo "</div>";
          }
      ?>
		<form method ="post" action = "publishevent.php" enctype="multipart/form-data">
			<input type ="hidden" name ="size" value ="1000000">
		<div>
			<input type = "file" name="image">
			</div>
			<div>
			<textarea name="text" cols="100" placeholder ="say something about event......" ></textarea>
			</div>
			<div>
			<input type = "submit" name = "upload" value="Upload Image">
		</div>
		</form>
		</div>
		</body>
		</html>