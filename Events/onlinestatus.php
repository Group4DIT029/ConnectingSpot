<?php  

 $connect = mysqli_connect("localhost", "root", "", "event_app");  
 $output = '';  
 $sql = "SELECT * FROM membership where status =1";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive-online">  
           <table  > 
           <tr>  
                     <th width="8%"></th>  
                     <th width="8%"></th>  
                     <th width="1%"></th>  
                </tr>';  
                
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td class="first_name" data-id1="'.$row["id"].'" > <font color="yellow">'.$row["username"].'</td>  
                     <td class="last_name" data-id2="'.$row["id"].'" >'.'<img height ="50px" width="50px" src = "images/'.$row['image'].'">'.'</td>  
                     <td><div class="large-1 columns conniStatus">'.'
              <div id="connectionStatus">'.'</div>'.'</div>'.'</td>  
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