<?php
			$conn = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME);

			// Check connection
			if (mysqli_connect_errno())
			{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
					
            
			$id = $_SESSION['id'];
        
            $q = 	'SELECT * FROM accounts WHERE id="'.$id.'"';

             
            if ($result = $conn->query($q)) {
				

                /* fetch object array */
                while ($row = $result->fetch_row()) {
                    $id = $row[0];
						$_SESSION['id'] =	$id;	
                    $username = $row[1];
						$_SESSION['username'] =	$username;
                    $password = $row[2];
						
                    $email = $row[3];
						$_SESSION['email'] = $email;
					$full_name = $row[4]; 
						$_SESSION['full_name'] = $full_name;
                    $database_modules_acces = $row[5];
						$_SESSION['database_modules_access'] = $database_modules_acces;
                    $application_modules_acces = $row[6];
						$_SESSION['application_modules_access'] = $application_modules_acces;
                    $notification = $row[7];
						$_SESSION['notification'] = $notification;
					$setting = $row[8];
						$_SESSION['setting'] = $setting;
					
                    
                    
                }

                /* free result set */
                $result->close();
            }

            /* close connection */
            $conn->close();
            
    
             ?>