<?php
	require 'login3.php';
	//include 'header.php';
	
	function Adddata()
	{
		require ('login3.php');
		$name = $_POST['fname'];
		$email = $_POST['email'];
		$username = $_POST['user'];
		$phone = $_POST['phno'];
		//$Enrollment=$_POST['enroll'];
		$password = $_POST['pass'];
		$cpassword = $_POST['cpass'];
		$radiom=$_POST["faculty"];
	}
		$sql_u = "SELECT * FROM professor WHERE username='$username'";
		$res_u = mysqli_query($connection, $sql_u);
		if (mysqli_num_rows($res_u) > 0) {
			echo "Sorry... username already taken"; 	
		}
			elseif($password==$cpassword)
			{
			$sql = "INSERT INTO professor(name,email,username,phone,password,cpassword,faculty) values ('$name','$email','$username','$phone','$password','$cpassword','$radiom')";
			}
			elseif ($connection->query($sql) === TRUE) 
			{
					header("location:index.php");
			}
		else
			{
				echo'<span style = "color:Red;">Password didn\'t matched</span>';	
			}
	if(isset($_POST['submit'])){
		Adddata();
	}
	
?>