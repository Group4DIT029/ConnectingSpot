<?php  

 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 $output = '';  
 $sql = "SELECT * FROM membership where status =1";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive-online">  
           <table  class="table table-bordered"> 
           <tr>  
                     <th width="130%"></th>  
                     <th width="1%"></th>  
                     <th width="6%"></th>  
                </tr>';  
                
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= ' 
                <tr>     
                     <td class="last_name" data-id3="'.$row["id"].'" > <fieldset>'.'<img height ="50px" width="50px" name="chat_btn" class="btn btn-xs btn-danger btn_chat" data-id3="'.$row["id"].'"  src = "images/'.$row['image'].'">'.'<font color="yellow">'.$row["username"].'
                    
              <div id="connectionStatus">'.'</div>'.'</td>  
                </fieldset> </tr> 
           ';  
      }  
     
 }  
 
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>  