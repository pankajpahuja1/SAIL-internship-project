<?PHP
session_start();
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!MANAGER HOME!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
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

		
		

<style>
<!--#container ul
{	list-style:none;
	
}-->
#container a
{
	background-color:lightblue;
	width:150px;
	border:20px solid navy;
	height:70px;
	float:left;
	text-align:center;
	
	color:black;
	font-size:25px;
}
div
{
	background-color:dimgrey;
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
		
		
<body style="background-color:darkgrey;">
	<div align='center'>
<img src ="ss.png" width=300 height=300 ></br></br>
	</div>
	<div id = "container">
	<form>
		<input class = "MYButton" type="button" value= "logout" onclick="window.location.href='logout.php'" />
	</form>
	
	</br>
	
	<ul style= align : "center">
	<li>	<a href ="mhome.php">Home</br></a> </li>
		
		<li>
		<a href ="complaintstatus.php">complaint status</br></a>
		</li> 
		
		<li><a href ='warrenty_validation.php'>warrenty validation</br></a></li>
		<li><a href="inventory_reg.php">reg inventory<br/></a></li>
		<li><a href="register.php">user register<br/></a></li>
	</ul>
	</div>
</body>
</html>