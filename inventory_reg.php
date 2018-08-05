<?php

session_start();
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!REGISTER INVENTORY!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
   if($_SESSION['user2'] || $_SESSION['user3'] )
   {
   }
   else 
   {
	   header("location: login.php"); 
   }

?>
<html>
<head>
<!--<style>
		
		div{
			
			text-align:center;
			background-color:rgb(120,0,0);
		}
		a{
			color : white;
		}
		

		
		</style>-->
		
		

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
	
	color:white;
	font-size:25px;
}
div
{
	background-color:lightblue;
	text-align:center;
}
<!--#buttoon form
{
		background-color:black;
	float:right;
	font-size: 2000%;
}-->

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
<div>
<img src ="ss.png" width=300 height=300 border=0>	</br></br>
</div>
	<div id = "container">
	
	
	<form align="right">
		<input class = "MYButton"  type="button" value= "logout" onclick="window.location.href='logout.php'" />
		
	</form>
	
	
	
	
	</div>




<form action="inventory_reg.php"  align="center" method="POST">
<font size = "+1.8">

		   <b>ENTER INVENTORY TYPE    : <input type="TEXT" name ="type" required ="required"/></br></b></br>
           <b>ENTER INVENTORY CODE: <input type="text" name="inv_code" required="required" /> <br/></b></br>
           <b> ENTER VENDOR DETAIL : <input type="text" name="ven_det" required="required" /> <br/></b></br>
		   <b> ENTER AMC DETAIL : <input type="text" name="amc_det" required="required" /> <br/></b></br>
		   <b> ENTER PURCHASED DATE : <input type="date" name="pur_date" required="required" /> <br/></b></br>
		   <b> ENTER WARRENTY (IN MONTHS) : <input type="number" name="war_in_month" required="required" /> <br/></b></br></br>
		  
		   
		   
   
<input class = "MYButton" type="submit" value= "SAVE TO DATABASE" /><br><br><br><br>
		
	</font>

           
</form>

	
		</body>
</html>





<?PHP
	if($_SERVER["REQUEST_METHOD"]=="POST")
		{
	$inv_type = $_POST['type'];
	$inv_code = $_POST['inv_code'];
	$ven_det = $_POST['ven_det'];
	$amc_det = $_POST['amc_det'];
	$pur_date = $_POST['pur_date'];
	$warrenty = $_POST['war_in_month'];
	$bool = true;
	
	$a = mysqli_connect("localhost","root","Pankaj@123","first_try") or die(mysql_error());
	mysqli_query($a,"INSERT INTO inventories (type,code, vendor_detail,amc_detail,purchased_date,warrenty_in_months) 
	VALUES ('$inv_type','$inv_code','$ven_det','$amc_det','$pur_date','$warrenty')");
	print '<script>alert("data saved")</script>;';
    
		}
	
	/*if($_SERVER["REQUEST_METHOD"] == "POST")
		{
	     $time_alloted = ($_POST['time_alloted']);
	 echo "
	 <h1>$time_alloted</h1>";
		}
	*/

		
?>	