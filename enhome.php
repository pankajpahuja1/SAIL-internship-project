<?php
 session_start();
 /*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!ENGINEER HOME!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
   if($_SESSION['user1'])
   {
   }
   else 
   {
	   header("location: login.php"); 
   }
 
 ?>
 
 <html>
 <head>
 <style>
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
div
{
	background-color:lightblue;
	text-align:center;
}
 </style>
 </head>
 <body>
<div>
 
 <img src ="ss.png" width=300 height=300 border=0>	</br></br>
 </div>
	
	
	
	
	
	
	<form align="right">
		<input class = "MYButton"  type="button" value= "logout" onclick="window.location.href='logout.php'" />
		
	</form>
	<form>
	<input class = "MYButton"  type="button" value= "ALLOT TIME" onclick="window.location.href='enhomehelper.php'" />
	</form>
 


 
 


 </body>
</html> 
<?php

$a = mysqli_connect("localhost", "root","Pankaj@123","first_try") or die(mysql_error());
$query = mysqli_query($a,"select * from complaint");
while($row = mysqli_fetch_array($query)) 
	{
		$table_inv = $row['inventory'];
		$table_desc = $row['description'];
	echo" <html>
		<head>
		<style>
		table
		{
			border: 2px solid slategery;
		}
		</style>
		</head>
		<body>
		<table align=center border =2px >
		<tr>
		<th>inventory detail</th>
		<th>complaint description</th>
		</tr>
		<tr>
		<td>$table_inv</td>
		<td>$table_desc</td>
		</tr>
		</br>
		</body>
		</html>";
	}



?>