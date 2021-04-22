<?php
require "login3.php";
			function AddData($connection){
				$rating = $_POST['rating'];
				$review = $_POST['remark'];
				$sql = "insert into rating(rating,review)VALUES ('$rating','$review')";
				// $result = mysqli_query($connection,$sql);
				// if(!$result)
					// {
						// printf(mysqli_error($connection));
						// exit;
					// }
				if ($connection->query($sql) === TRUE) {
						header("location: professordashboard.php");
						exit;
				}
				else{
				}
			}
			if(isset($_POST['submit']))
			{
				AddData($connection);
			}
?>