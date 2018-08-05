<?php

session_start();
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!COMPLAINT STATUS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
   if($_SESSION['user2']||$_SESSION['user3'])
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
	float:right;
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
	<div style= align:"center"; background-color:"lightblue">
		<img src ="ss.png" width=300 height=300 border=0 >	</br></br>
	</div>
	<div id = "container">
		<form align="right">
		<input class = "MYButton"  type="button" value= "logout" onclick="window.location.href='logout.php'" />
		</form>
	</div>
</body>
</html>


<?PHP


 $a = mysqli_connect("localhost", "root","Pankaj@123","first_try") or die(mysql_error());
$query = mysqli_query($a,"select * from complaint");

while($row = mysqli_fetch_array($query)) 
	{
		$table_inv = $row['inventory'];
		$table_desc = $row['description'];
		$table_time = $row['time'];
	 echo " <html>
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
		<th>time</time>
		</tr>
		<tr>
		<td>$table_inv</td></br>
		<td>$table_desc</td></br>
		<td>$table_time</td></br>
		</tr>
		</br>
		</body>
		</html>";
	}


?>
