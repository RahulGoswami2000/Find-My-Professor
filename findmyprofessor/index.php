<?php
include 'header.php'
?>
<html>
<head>
<title>
Find My Professor
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 5px;
}
.body1
{
	margin-top:400px;
	font-family: Century gothic;
	font-size: 20px;
	color: #020403;
}
.collapsible {
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  font-family: century gothic;
}

.active, .collapsible:hover {
	background-color:#020403;
 // background-image: linear-gradient(to right,gold,black);
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
  color: black;
  font-family:century gothic;
}
.low
	{
		margin-top:250px;
		color: #020403;
		font-size:15px;
	}
	.info
	{
		float:left;
		margin-left:5px;
	}
</style>
</head>
<body>
<div class="row">
  <div class="column">
    <img src="group.jpeg" alt="Snow" style="width:100%" height="400px">
  </div>
  <div class="column">
    <img src="indeximg.png" alt="Forest" style="width:100%" height="400px">
  </div>
</div>
<div class="body1">
<p><b><li>All about Find My Professor?</li></b></p>
<p>Find My Professor is all about the finding your professor when you need them on your condition isn't it fun that you can cancel the meeting with the professor.You can ask for the time slot of the professor meet them solve your doubts rate them and leave the session</p>
<p>Do you ever think that finding your professor in college is difficult they can be in a meeting or on leave? WhatsApp , E-mail, Calling are formal ways and not every time the professor can reply immediately .To find your fellow professor this is an easy way to adapt as all of the students and professors have a smartphones . 
FindMyProf is a web page to manage contact between you and your professor. Professor will set that he is available or not. If available then he will be able to set time that the student will be able to see and send request to professor for that particular time. Professor can accept or reject the request. If he accepts or rejects he has to give response to that request and in similar way students also has the facility to accept/reject the request if he/she will not able to attend due to some reasons.
</p>
<p>For more details click the below button</p>
<button class="collapsible"><b>More Details</b></button>
<div class="content">
  <p>FindMyProf is a web Page that help student and professor to manage their meetings. They can set meeting easily at appropriate time which is agreed by both student and professor. They can set their destination for the meeting. If the professor rejects they can tell the reason for not accepting i.e. in meeting, on leave etc., in similar way student can also accept/reject the request by giving the reason for the same.</p>
</div>
<div class="info">
<p>Which are the modoles in this. Let's check</p>
<p>Professor Module</p>
</div>
<div class="low">
<br><br><br><p>Don't have account?   <a href="professor.php" class="low"><b><u><i>Professor Register</b></u></a>|<a href="signup2.php" class="low"><b><u>Student Register</b></u></i></a></p>
</div>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>