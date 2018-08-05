<?php
session_start();
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!CHECK LOGIN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	$id =($_POST['id']);
	 $q = mysqli_connect("localhost", "root","Pankaj@123","first_try") or die(mysql_error()); 
	
	$query = mysqli_query($q,"SELECT * from users WHERE username='$username' AND id ='$id'"); 
	$exists = mysqli_num_rows($query); 
	
	if($exists > 0) 
	{
		
		$row = mysqli_fetch_assoc($query);
		
		if(($username == $row['username']) && ($password == $row['password'])) 
		{
				if($password == $row['password'])
				{
					if($row['designation']== 'manager')
					{
						$_SESSION['user2'] = $username; 
					    header("location: mhome.php"); 
				    }
					else if($row['designation']== 'engineer')
					{
						$_SESSION['user1'] = $username;
					    header("location: enhome.php"); 
				    }
					else if($row['designation']== 'employee')
					{
						$_SESSION['user3'] = $username; 
					    header("location: emhome.php"); 
				    }
					
					
				
				}
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; 
			Print '<script>window.location.assign("login.php");</script>'; 
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username!");</script>'; 
		Print '<script>window.location.assign("login.php");</script>'; 
	}
?>