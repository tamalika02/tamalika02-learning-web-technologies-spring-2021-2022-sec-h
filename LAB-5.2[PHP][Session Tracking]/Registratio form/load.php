<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title> 
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
         
      </head>  
      <body>  
        <div class="table_comtent" >              
                     <table >  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["User_name"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>';  
                          }  
                          ?> 

                     </table>  
                   </div>
      </body>  
 </html>  