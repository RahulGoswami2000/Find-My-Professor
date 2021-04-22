<?php
include 'header1.php';
?>
<html>
<head>
<style>
		body
		{
			text-align: center;
			margin-top:70px;
		}
		.button
		{
			background-color: #008080;
			font-family: century gothic;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px 2px;
			cursor: pointer;
			border-radius: 19px;
		}
		</style>
  <link rel="stylesheet" href="requestt.css" type="text/css">
</head>
<body>

<b>Hello <?php echo $_POST["name"]; ?>!<br><br></b>
<b>Your purpose of meeting is <?php echo $_POST["query"]; ?></b>
<form action="studentdashboard.php" method="post">
	<table>
	<tr>
		<td colspan="4" align="center"><input type="submit" name="submit" style="margin-left:620px" class="button"id="btn" value="Submit"></td>
	</tr>
	</table>
</form>
</body>
</html>
