<html>
<head>
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
				color:white;
				text-align:center;
				font-family:Century Gothic;
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
				color:white;
				text-align:center;
				font-family:Century Gothic;
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
				color:white;
				text-align:center;
				font-family:Century Gothic;
			}
			.fieldset3
			{
				background-color:#008080;
				width:280px;
				height:150px;
				margin-top:-69px;
				border-radius:4px;
				margin-left:300px;
				border-radius:20px;
				color:white;
				text-align:center;
				font-family:Century Gothic;
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
			
body{
	color:#008080;
	font-family:Century Gothic;
	/*text-align: center;*/
	margin:0;
}

/*Naavigation Bar*/
div{
	height:70px;
}
a{
	color: #f2f2f2;
	text-align: center;
	text-decoration: none;	
}
#Name{
	float: left;
	color: #f2f2f2;
	text-align: center;
	padding: 2px 5px;
	font-size: 30px;
	margin-top:12px;
}
.header {
	overflow: hidden;
	background-color: #008080;
	position: fixed;
	width: 100%;
	top: 0;
}
.links{
	float: right;
	display: block;
	color: #f2f2f2;
	text-align: center;
	margin-top:10px;
	text-decoration: none;
	padding: 14px 16px;
	font-size: 20px;
}
.links:hover {
	background-color: white;
	color: #008080;
	border-radius: 10px;
	transition: 0.2s;
}
body {
  font-family: Century Gothic;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 80px;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 80px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #008080;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #008080;
  font-size:20px;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 80px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div class="header">
	<a href="#">Home</a>
	</div>
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="#">Request</a>
  <a href="#"></a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<div>

				<fieldset class="fieldset">
				<br/>
				<a href="#use4" class="links1"><p><b><h1><u>History</u></h1></b><p></a>
				</fieldset>
		</div>
		<div>

				<fieldset class="fieldset1" >
				<br/>
				<a href="#user3" class="links1"><p><b><h1><u>Schedule</u></h1></b><p></a>
				</fieldset>
		</div>
				<div>

				<fieldset class="fieldset2">
				<br/>
				<a href="#user1" class="links1"><p><b><h1><u>Request List</u></h1></b><p></a>
				</fieldset>
		</div>
		<div>

				<fieldset class="fieldset3">
				<br/>
				<a href="#user2" class="links1"><p><b><h1><u>Time Slot</u></h1></b><p></a>
				</fieldset>
		</div>
		<div class="fieldset4">

				<br/>
				<h1> Professor Dashboard</h1>
		</div>
</body>
</html>