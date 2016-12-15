<?php  

 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 $output = '';  
 $sql = "SELECT * FROM events ORDER BY event_id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table  width="105%">  
                ';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
               <tr> 
                     <td width="96%" class="last_name" data-id1="'.$row["event_id"].'" >'.'<div id="img_div">'.'<img name="delete_btn" class="btn btn-xs btn-danger btn_delete" data-id3="'.$row["event_id"].'"  type="image"  id="img1" height ="150px" width="240px" src = "images/'.$row['image'].'">'
                     .$row["description"].'</div>'.'</td> 
                     
                 </tr> 
           ';  
      }  
      echo $row["event_id"];
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