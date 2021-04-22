<?php
	require 'login3.php';
	//include 'header.php';
	
	function Adddata()
	{
		require ('login3.php');
		$name = $_POST['fname'];
		$email = $_POST['email'];
		$phone = $_POST['phno'];
		$enrollment=$_POST['enroll'];
		$password = $_POST['pass'];
		$cpassword = $_POST['cpass'];
		//$radiom=$_POST['Faculty'];
		$sql_u = "SELECT * FROM student WHERE enrollment='$enrollment'";
		$res_u = mysqli_query($connection, $sql_u);
		if (mysqli_num_rows($res_u) > 0) {
			echo "Sorry... Enrollment already taken"; 	
		}
		elseif($password==$cpassword){
			$sql = "INSERT INTO student(name,email,phone,enrollment,password,cpassword) values ('$name','$email','$phone','$enrollment','$password','$cpassword')";
		}
			if ($connection->query($sql) === TRUE) 
			{
				header("location:studentdashboard.php");
			}
			else
			{
				echo'<span style = "color:Red;">Password didn\'t matched</span>';	
			}
	}
	if(isset($_POST['submit'])){
		Adddata();
	}
	
?>