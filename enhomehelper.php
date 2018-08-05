<?php

session_start();
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!ALLOT TIME!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
   if($_SESSION['user1'])
   {
   }
   else 
   {
	   header("location: login.php"); 
   }

?>
    <html>
	<head><title>time allot</title>
	<style>
	input.MYButton
{
	font-size:150%;
	float:CENTER;
	background-color:maroon;
	color:white;
	  cursor: pointer;
  outline: none;

  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

select {
	    font-size :20px;
}



	</STYLE></head>
	<body>
	<input class = "MYButton" type="button" value= "HOME"  onclick="window.location.href='enhome.php'" /><br><br>
	<font size = "+2">
   <h1 align="center" >	ALLOT TIME</h1>
   
   </font>
	<form method ="post" align="center" action ="enhomehelper.php">
	 
   
   <?PHP
$a = mysqli_connect("localhost", "root","Pankaj@123","first_try") or die(mysql_error());
$query = mysqli_query($a,"select inventory from complaint");
echo "<select name = 'inventory'>";
while($row =mysqli_fetch_assoc($query))
{	
	echo '<option value ="'.$row['inventory'].'">'.$row['inventory']."</option>";
	
}
echo '</select>';

?>
   
	<input type ="time" name = "time_alloted" required= "required"/></br>
	<br><input CLASS = "MYButton"type = "submit" value = "submit" required = "required"/></br>
	
	</form>
	
	</body>
	</html>
	
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					
					$inv = $_POST['inventory'];
					$time = $_POST['time_alloted'];
				
					$query1 = mysqli_query($a,"UPDATE complaint SET time = '$time' WHERE inventory='$inv'");
					print '<script>alert("Time Alloted");</script>';
					
					
				}
	?>
				
	
