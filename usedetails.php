
    
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
        

                
                $url = $_GET['id'];

                
                // initailizing curl
                $ch = curl_init();
                //curl options
                curl_setopt($ch, CURLOPT_POST, false);
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
                
                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                                
                curl_close($ch);
                $data = json_decode($result,true);
                
                echo "<table id=\"keywords\"/>"."<thead>"."<tr>";
                echo "<th>NAME</th><th>ID</th><th>CREATED</th><th>LAST UPDATED</th></tr></thead>";
                
                       echo "<tbody>
                      <tr>
                        <td class=\"lalign\">".$data['name']."</td>"."<td class=\"td1\">".
                        $data['id']."</td>"."<td>"
                           .$data['created']."</td>"."<td>".
                           $data['lastUpdated']."</td>";
                           
                           echo"</tr>"."</tbody>";
                   
                 echo"</table>";
     
    
    ?>
</body>
</html>
