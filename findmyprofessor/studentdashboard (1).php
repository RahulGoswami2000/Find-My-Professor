<?php
// Start the session
session_start();

			include'header1.php';

?>

<html>
	<head>
		<title>Student Dashboard</title>
		<link rel="stylesheet" src="text/css" >
		<style>
		.fieldset
			{
				background-color:#008080;
				width:280px;
				height:150px;
				margin-top:150px;
				border-radius:4px;
				margin-left:300px;
				border-radius:20px;
			}
			.fieldset1
			{
				background-color:#008080;
				width:280px;
				height:150px;
				margin-top:-69px;
				border-radius:4px;
				margin-left:900px;
				border-radius:20px;
			}
			.fieldset2
			{
				background-color:#008080;
				width:280px;
				height:150px;
				margin-top:300px;
				border-radius:4px;
				margin-left:900px;
				border-radius:20px;
			}
			.fieldset3
			{
				background-color:#008080;
				width:250px;
				height:150px;
				margin-top:-69px;
				border-radius:4px;
				margin-left:300px;
				border-radius:20px;
			}
			.fieldset4
			{
				margin-top: -550px;
				color: #008080;
				width: 400px;
				height: 100px;
				border-color: white;
				margin-left: 556px;
				font-family:Century Gothic;
		    }
			.links1:hover
			{

				font-size:18px;
				font-style:italic;

			}
	</style>
	</head>
	<body>

		<div>

				<fieldset class="fieldset">
				<br/>
				<a href="history.php" class="links1"><p><b><h1><u>History</u></h1></b><p></a>
				</fieldset>
		</div>
		<div>

				<fieldset class="fieldset1" >
				<br/><a href="queries.php" class="links1"><p><b><h1><u>Queries</u></h1></b><p></a>
				</fieldset>
		</div>
				<div>

				<fieldset class="fieldset2">
				<br/><a href="responses.php" class="links1"><p><b><h1><u>Responses</u></h1></b><p></a>
				</fieldset>
		</div>
		<div>

				<fieldset class="fieldset3">
				<br/><a href="placereq.php" class="links1"><p><b><h1><u>Place Request</u></h1></b><p></a>
				</fieldset>
		</div>
		<div class="fieldset4">
				<br/>
				<h3><h1>Student Dashboard</h1></h3>
		</div>
	</body>
</html>
