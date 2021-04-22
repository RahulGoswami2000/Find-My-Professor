<?php
include 'header1.php';
?>
<html>
<head>
  <link rel="stylesheet" href="requestt.css" type="text/css">
  		<style>
		body
		{
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
		.textarea
		{
		    width: 100%;
		    padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 3px solid #ccc;
			-webkit-transition: 0.5s;
			transition: 0.5s;
			outline: none;
		}
		.textarea:focus 
		{
		border: 2px solid #008080;
		}
		</style>
</head>
<body>

<form action="redir.php" method="post">
<table style="margin:0 auto;">
	<tr>
		<td colspan="2"><b>Full Name : </td>
		<td colspan="2"><input type="text" class="textarea" name="name" required></td>
	</tr>
	<tr><td><br/></td></tr>	
	<tr>
		<td colspan="2"><b>Purpose of meeting : </td>
		<td colspan="2"><input type="text" class="textarea" name="query" required></td>
	</tr>
	<tr><td><br/></td></tr>
	<tr>
		<td colspan="4" align="center"><input type="submit" name="submit" style="margin-left:490px"class="button" id="btn" value="Send"></td>
	</tr>
	</table>
</form>

</body>
</html>
