<!DOCTYPE html>
    <html>
    <head>
    <title>
    DHIS USERS
    

    </title>
    <link href="style.css" rel='stylesheet' type='text/css'/>
    </head>
    <body>
        <div id="wrapper" >
    <h1>DHIS API VIEW USERS </h1>
    
    <?php
    
        
       echo "api started";
        
        $username = "bootcamp2016";
        $password = "Bootcamp2016";
        $t_fetched=0;
        $count=0;
        

                
                $url = "http://test.hiskenya.org/api/users.json?";

                
                // initailizing curl
                $ch = curl_init();
                //curl options
                curl_setopt($ch, CURLOPT_POST, false);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
                
                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                
                //execute
                $result = curl_exec($ch);
                //echo $result;
                // var_dump(json_decode($result, true));// object
                //close connection
                
                curl_close($ch);
                $data = json_decode($result,true);
                
                echo "<table id=\"keywords\"/>"."<thead>"."<tr>";
                echo "<th>NAME</th><th>ID</th><th>CREATED</th><th>LAST UPDATED</th><th>view details</tr></thead>";
                foreach($data as $key =>$value)
                 { 
                    foreach($data['users'] as $value)
                    {
                       echo "<tbody>
                      <tr>
                        <td class=\"lalign\">".$value['name']."</td>"."<td class=\"td1\">".
                        $value['id']."</td>"."<td>"
                           .$value['created']."</td>"."<td>".
                           $value['lastUpdated']."</td>";
                           echo'<td><a href="usedetails.php?id='.$value['href'].'">more details</a></td>';
                           echo"</tr>"."</tbody>";
                     
                    }
                 }
                 echo"</table>";
     /
                
    
    ?>
</body>
</html>
