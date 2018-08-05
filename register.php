<?php

session_start();
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!REGISTER USER!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
   if($_SESSION['user2'])
   {
   }
   else 
   {
	   header("location: login.php"); 
   }

?>
<html>
	<head>
		<title>My first PHP website</title>
	<style>
#container a
{
	background-color:lightblue;
	width:150px;
	border:20px solid navy;
	height:70px;
	float:left;
	text-align:center;
	
	color:white;
	font-size:25px;
}
div
{
	background-color:lightblue;
	text-align:center;
}

input.MYButton
{
	font-size:150%;
	
	background-color:maroon;
	color:white;
	  cursor: pointer;
  outline: none;

  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

</style>		
</head>

		
<body style="background-color:white;">
<div><img src ="ss.png" width=300 height=300 border=0>	</br></br></div>
	<div id = "container">
		
		<form align="right">
		<input class = "MYButton"  type="button" value= "logout" onclick="window.location.href='logout.php'" />
		</form>
	</div>

	
<h1><center>Registration Page</center> </h1>
<input class = "MYButton" type="button" value= "HOME"  onclick="window.location.href='mhome.php'" /><br><br>
<form action="register.php" align="center" method="post">
	<font size="5">
		<b> Enter id:<input type="number_format" name="id" required="required"/> <br/></b>
		<b>Enter Username: <input type="text" name="username" required="required"/> <br/></b>
		<b>Enter Password: <input type="password" name="password" required="required" /> <br/></b>
		<b>Enter designation: <input type="text" name="designation" required="required"/> <br/></b>
	</font>
	<input class = "MYButton" type="submit" value= "Register" /><br><br><br><br>
</form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$id = ($_POST['id']);
	$username = ($_POST['username']);
	$password = ($_POST['password']);
	
	$designation =($_POST['designation']);
	
    $bool = true;
	$a = mysqli_connect("localhost", "root","Pankaj@123","first_try") or die(mysql_error());                                                                         //mysqli_select_db("first_try") or die("Cannot connect to database"); //Connect to database
	$query = mysqli_query($a,"Select * from users");
	while($row = mysqli_fetch_array($query)) 
	{
		$table_users = $row['username']; 
		$table_userid = $row['id'];
		if($username == $table_users || $id == $table_userid )
		{
			$bool = false; 
			Print '<script>alert("Username or id has been taken!");</script>';
			Print '<script>window.location.assign("register.php");</script>'; 
		}
	}
	if($bool) 
	{
		mysqli_query($a,"INSERT INTO users (id,username, password,designation) VALUES ('$id','$username','$password','$designation')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; 
		Print '<script>window.location.assign("register.php");</script>'; 
	}
}
?>