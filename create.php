      <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'pizzapie3';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $First = addslashes ($_POST['First']);
               $Last = addslashes ($_POST['Last']);
            }else {
               $First = $_POST['First'];
               $Last = $_POST['Last'];
            }
            
            $Birth = $_POST['Birth'];
             
            $Death = $_POST['Death'];
            
            $sql = "INSERT INTO iremember ". "(First,Last, Birth, Death,  
               creation) ". "VALUES('$First','$Last','$Birth', '$Death', NOW())";
               
            mysql_select_db('rememberMe');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
                  
             
             $cool = MySql_Insert_Id();

             
                if (isset($_POST['add']))
            {   
                header('Location: theTree.php?id='.$cool);       
            }     
                    
             
             
            
            echo $last_id;
             
            
            mysql_close($conn);
         }else {
            ?>
            
            <?php
         }
      ?>