<?php
             
             
             
			include 'config/dbconnection.php';
			 
             $id = $_SESSION['id'];
        
             $q = 	'SELECT * FROM accounts WHERE id="'.$id.'"';
			 
			 
             
             
             
            if ($result = $conn->query($q)) {
				

                /* fetch object array */
                while ($row = $result->fetch_row()) {
                    $id = $row[0];
                    $username = $row[1];
                    $password = $row[2];
                    $email = $row[3];
                    $full_name = $row[4];
                    $text = $row[5];
                    $set_profile = $row[6];
                    
                    
                    
                }

                /* free result set */
                $result->close();
            }

            /* close connection */
            $conn->close();
            
    
             ?>