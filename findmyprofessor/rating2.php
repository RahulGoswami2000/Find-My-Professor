<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="5sta.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Rating</title>
</head>
<body>
 <div class="rating-box">
 <form method="post" action="ratingauth.php">
	<h1>Please give the rating</h1>
	<div class="ratings">
	<span class="fa fa-star-o"></span>
	<span class="fa fa-star-o"></span>
	<span class="fa fa-star-o"></span>
	<span class="fa fa-star-o"></span>
	<span class="fa fa-star-o"></span>
	</div>
	<input type="text" id="ratingvalue" name="rating">
	<input type="text" name="remark" placeholder="Write your review">
	<input type="submit" value="Submit" class="button" name="submit">
	</form>
</div>
<script src="script2.js"></script>
</body>
</html>