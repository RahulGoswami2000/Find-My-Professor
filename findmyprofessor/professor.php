<?php
// Start the session
session_start();
?>
<html>
	<head>
		<title>Student Registeration</title>
		<link rel="stylesheet" src="text/css" >
		<style>
	.login-box
	{
		width:300px;
		position:relative;
		top:10%;
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
	.login-box input[type="text"], input[type="password"], input[type="email"]
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
			include'header.php';
		?>
		<div class="login-box">
			<form method="post" action="professorauth.php" <?php echo $_SERVER['PHP_SELF']; ?>>          
						<h1>Create Account</h1>
						<p><b>Full Name : </b></p>
									<input type="text" class="textarea" id="fname" name=" fname" placeholder="Full Name" style="width:100%;" name="fname" pattern="[A-Za-z ]+" required >
							<p><b>Email :</b></p> 
									<input type="email" class="textarea" id="email" placeholder="Email" style="width:100%;" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							<p><b>Username :</b></p>                                                   
									<input type="text" id="user" class="textarea" placeholder="Username" style="width:100%;" name="user" pattern="[A-Za-z0-9]{5,}" required>
							<p><b>Phone :</b></p>
									<input type="text" id="phno" class="textarea" placeholder="Phone Number" style="width:100%;" name="phno" pattern="[0-9]{10}" required>
							<p><b>Password :</b></p>     
									<input type="password" id="pass" placeholder="Password" class="textarea" style="width:100%;" name="pass" pattern="[A-Za-z0-9]{6,}" required>
							<p><b>Confirm Password :</b></p>
									<input type="password" id="cpass" class="textarea" placeholder="Confirm Password" style="width:100%;" name="cpass" pattern="[A-Za-z0-9]{6,}" required>
							<p><b>Choose the following:</b></p>
							<input type="radio" class="textarea" id="pfaculty" name="Faculty" value="Permanent faculty"  required ><p>
							 <label for="Permanent faculty">Permanent faculty</label><br>
							<input type="radio" class="textarea" id="vfaculty" name="Faculty" value="Visiting faculty" required ><p>
							<input type="submit" name="submit" class="Button"id="btn" value="Submit">
			</form>
		</div>
	</body>
</html>