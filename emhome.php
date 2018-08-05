<?php
session_start();
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!EMPLOYEE HOME!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
   if($_SESSION['user3'])
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

	
<body><div>
<img src ="ss.png" width=300 height=300 border=0>	</br></br></div>
<form action="comp.php" align="left" method="POST">	
   
<input class = "MYButton" type="button" value= "register inventory" onclick="window.location.href='inventory_reg.php'" /><br><br><br><br>
		
		</form>
		<form action="comp.php" align="right" method="POST">
		<input class = "MYButton" type="button" value= "logout" onclick="window.location.href='logout.php'" />
		</form>
		
		<form action="comp.php" align="center" method="POST">
		   	
		
	      <b>ENTER INVENTORY TYPE</b>: <input type="TEXT" name ="type"  required ="required"/></br></br>
		   <b>ENTER COMPLAINT DESC</b>		: <input type="TEXT AREA" name ="message" required ="required"/></br></br></br>
		  <input class="MYButton" type="submit" value="register complaint"/> 
		    
</form>	
<form action="comp.php" align="left" method="POST">
		<input class = "MYButton" type="button" value= "complaint status" onclick="window.location.href='complaintstatus.php'" />
         </form>
</body></html>