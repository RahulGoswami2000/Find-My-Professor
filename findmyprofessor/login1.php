 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Professor Login</title>
    <style type="text/css">
	.login-box
	{
		width:280px;
		position:absolute;
		top:30%;
		left:50%;
		transform: translate(-50%,-50%);
		color:black;
		
	}
	 h1
	 {
		 margin: 0; 
		 float:left;
		 font-size:38px;
		 border-bottom: 6px solid gold;
		 margin-bottom: 40px;
		 padding:0 0 20px;
		 text-align:center;
	 }
    .login-box p
	 {
		 margin: 0;
		 padding: 0;
		 font-size: 18px;	
	}
	.login-box input
    {
	    width: 100%;
		overflow: hidden;
		margin-bottom: 20px;
		margin: 8px 0;
		padding:9px 0;	
    }
	.login-box input[type="text"], input[type="password"] 
	 {
		 border: none;
		 outline: none;
		 border-bottom: 1px solid gold;
		 background: none;
		 color:gold;
		 font-size: 16px;
		 width:100%;
		 float:left;	
	 }
    .button
		 {
			 font-family: century gothic;
			 border: none;
			 color: white;
			 padding: 15px 30px;
			 text-align: center;
			 text-decoration: none;
			 display: inline-block;
			 font-size: 16px;
			 margin: 10px 2px;
			 cursor: pointer;
			 border-radius: 19px;
			 background-image: linear-gradient(to right, gold , black);
		 }
    </style>
</head>
<body>
<?php
	include 'header.php';
?>
    <div class="login-box">
			<form action="loginauthen.php" method="post">
					<h1>Fill up the Details</h1>
							<p><b>Username</b></p>
									<input type="text" class="textarea" id="uname" name="uname" placeholder="Username" style="width:100%;" pattern="[A-Za-z ]+" required >
							<p><b>Password:</b></p>
									<input type="password" class="textarea" id="pass" name="pass" placeholder="Password" style="width:100%;" name="email" required>	
							<input type="submit" name="submit" id="submit" class="button" id="btn" value="Submit">
							
        </form>
		
    </div>    
	
</body>
</html>