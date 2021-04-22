<html>
	<head>
		<title>Student Registeration</title>
		<link rel="stylesheet" src="text/css" href="registerIndi.css">
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
			<form method="post" action="studentauth.php">
			<h1>Create Account</h1>
							<p><b>Full Name : </b></p>
									<input type="text" placeholder="Full Name" style="width:100%;" id="fname" class="textarea" name="fname" pattern="[A-Za-z ]+" required >
							<p><b>Email : </b></p>
									<input type="email" placeholder="Email" style="width:100%;"class="textarea" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							<p><b>Phone : </b></p> 
									<input type="text" placeholder="Phone Number" style="width:100%;" class="textarea" id="phno" name="phno" pattern="[0-9]{10}" required>
							<p><b>Enrollment : </b></p>
									<input type="text" placeholder="Enrollment" style="width:100%;" class="textarea" id="enroll" name="enroll" pattern="[0-9]{11}" required>
							<p><b>Password : </b></p>
									<input type="password" style="width:100%;"placeholder="Password" name="pass" id="pass" class="textarea" pattern="[A-Za-z0-9]{6,}" required>
							<p><b>Confirm Password : </b></p>
									<input type="password" style="width:100%;" name="cpass"  placeholder="Confirm Password" id="cpass" class="textarea" pattern="[A-Za-z0-9]{6,}" required>
									<input type="submit" name="submit" class="Button"id="btn" value="Submit">
			</form>
		</div>
	</body>
</html>