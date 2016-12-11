<?php  
echo  '<link rel="stylesheet" href="css/style.css">';
session_start();
 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 $output = '';  
 $sql = "SELECT * FROM membership ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" style="margin:5px">  
                <tr>  
                     <th width="4%"></th>  
                     <th width="6%"></th>
                     <th width="2%"></th>   
                     <th width="2%"></th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td class="first_name" data-id1="'.$row["id"].'" > <font color="white">'.$row["username"].'</td>  
                     <td class="last_name" data-id2="'.$row["id"].'" >'.'<img height ="100px" width="100px" src = "images/'.$row['image'].'">'.'</td>  
                     <td><button type="button" name="addfriend_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_addfriend" data-id4="'.$_SESSION["id"].'">add friend</button></td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete" >visit profile</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="first_name" contenteditable></td>  
                <td id="last_name" contenteditable></td>  
                
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>  