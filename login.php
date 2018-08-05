<html>
    <head>
	<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!LOGIN!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <title>My first PHP Website</title>
		<style>
		
		div{
			
			text-align:center;
			background-color:lightblue;
		}
		p{
			background-color:darkblue;
		}
		input.MYButton
{
	font-size:100%;
	
	background-color:maroon;
	color:white;
	  cursor: pointer;
  outline: none;

  border: none;
  border-radius: 15px;
}
		
		
		</style>
    </head>
    <body>
	<div>
	<img src ="Steel-Authority-of-India-Limited-SAIL.png" width=1500 height=250 border=0>
	<font color ="white"size = "+3">
     
	   </font>
	   
	   <font size = "+2">
		  <h2>Login Page</h2>
		  </br>
			</font>
	
		<font size = "+2">
        <form action="checklogin.php" method="post">
		   ENTER id 	  : <input type="number" name ='id' required ="required"/></br></br>
           Enter Username : <input type="text" name="username" required="required" /> <br/></br>
           Enter password : <input type="password" name="password" required="required" /> <br/></br>
           
		   <input class ="MYButton" type="submit" value="login"/>
        </form>
		
		</font>
		</div>
	
    </body>
</html>