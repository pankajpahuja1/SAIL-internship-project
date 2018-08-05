<?php
session_start();
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!CHECK WARRENTY!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
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
<title>warrenty validation</title>



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
<div style = align:"center">
<img src ="ss.png" width=300 height=300 border=0>	</br></br>
</div>
	<div id = "container">
	
	
	<form align="right">
		<input class = "MYButton"  type="button" value= "logout" onclick="window.location.href='logout.php'" />
		
	</form>
	
	
	
	
	</div>


<form action = "warrenty_validation.php" align="center" method = "POST" >
<b>ENTER INVENTORY CODE: <input type = "text" name = "ancode" required = "required" /></br></b>

 <!--<form action="warrenty_validation.php" align="center" method="POST">	--></br>
   
<input class = "MYButton" type="submit" value= "Check Database" /><br><br><br><br>
		
		</form>



  
  
  </body>
  </html>
  
  <?php
  
$a = mysqli_connect("localhost", "root","Pankaj@123","first_try") or die(mysql_error());
if($_SERVER["REQUEST_METHOD"]= "POST")
{
	$code = ($_POST["ancode"]);
	$query = mysqli_query($a,"select * from inventories");
	while($row = mysqli_fetch_assoc($query))
	{
		if ($code === $row['code'])
		{
			$table_vendor = $row['vendor_detail'];
			$table_amc = $row['amc_detail'];
			$table_date = $row['purchased_date'];
			$table_warr = $row['warrenty_in_months'];
			echo "<html>
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
			<th>vendor detail</th>
			<th>amc detail</th>
			<th>date of purchased</th>
			<th>warrenty in months</th>
			</tr>
			<tr>
			<td>$table_vendor</td>
			<td>$table_amc</td>
			<td>$table_date</td>
			<td>..$table_warr</td>
			</tr>
			</br>
			</body>
			</html>";
	
		}
		
	
	
	}
	
}
  
 
  ?>