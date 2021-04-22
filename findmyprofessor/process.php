<?php
require 'login3.php';
$query = mysqli_query($connection,"SELECT AVG(rating) as AVGRATE from professor");
$row = mysqli_fetch_array($query);
$AVGRATE=$row['AVGRATE'];
$query = mysqli_query($connection,"SELECT count(rating) as Total from professor");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];
$query = mysqli_query($connection,"SELECT count(remark) as Totalreview from  professor");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];
$review = mysqli_query($connection,"SELECT remark,rating,email from professor limit 5");
$rating = mysqli_query($connection,"SELECT count(*) as Total,rating from professor");
?>