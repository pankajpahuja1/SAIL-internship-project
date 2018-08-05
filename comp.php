<?PHP
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!COMPLAINT!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
if($_SERVER["REQUEST_METHOD"]=="POST")
	$inv_type = $_POST['type'];
	$comp_desc = $_POST['message'];
	
	$a = mysqli_connect("localhost", "root","Pankaj@123","first_try") or die(mysql_error());
	
	mysqli_query($a,"INSERT INTO complaint(inventory,description) VALUES ('$inv_type','$comp_desc')");
	
	
	
	
	
	Print '<script>alert("Successfully Registered!");</script>'; 
		Print '<script>window.location.assign("emhome.php");</script>';
		
	

?>
