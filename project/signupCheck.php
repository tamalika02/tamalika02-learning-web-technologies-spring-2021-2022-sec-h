<?php 

	if(isset($_POST['submit']))
	{

		$ID 	= $_POST['ID'];
		$name 		= $_POST['name'];
		$password 	= $_POST['password'];
		$phone 	= $_POST['phone'];
        $email 	= $_POST['email'];
		if($ID != ""){
			if($password != ""){
				if($name !=""){

					$myfile = fopen('user.txt', 'a');
					$myuser = $ID."|".$password."|".$name."|".$phone."|".$email."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);
           
					header('location: login.html');
				    }
				   else{
					echo "invalid name....";
				       }
			}
			else{
				echo "invalid password....";
			}
		}
		else{
			echo "invalid ID....";
		}
	}
?>