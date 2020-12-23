<?php
			include 'config/dbconnection.php';
			 
             $id = $_SESSION['id'];
        
             $q = 	'SELECT * FROM accounts WHERE id="'.$id.'"';
			 
			 
             
             
             
            if ($result = $conn->query($q)) {
				

                /* fetch object array */
                while ($row = $result->fetch_row()) {
                    $id = $row[0];
						
                    $username = $row[1];
						$_SESSION['username'] =	$username;
                    $password = $row[2];
						
                    $email = $row[3];
						$_SESSION['email'] = $email;
					$full_name = $row[4]; 
						$_SESSION['full_name'] = $full_name;
                    $modules_acces = $row[5];
						$_SESSION['modules_acces'] = $modules_acces;
                    $notification = $row[6];
						$_SESSION['notification'] = $notification;
                    
                    
                    
                }

                /* free result set */
                $result->close();
            }

            /* close connection */
            $conn->close();
            
    
             ?>