<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		

.tooltip:after,
.tooltip:before {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  left: 50%;
  box-sizing: border-box;
}
.tooltip:after {
  content: attr(data-tooltip);
  background: rgba(0,0,0,0.5);
  top: 100%;
  margin-top: 22px;
  padding: 10px;
  color: #fff;
  line-height: 1.5;
  width: 250px;
  margin-left: -125px;
  border-radius: 4px;
}
.tooltip:before {
  content: "";
  top: 100%;
  margin-top: 12px;
  margin-left: -5px;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid rgba(0,0,0,0.5);
}
.tooltip:hover:after,
.tooltip:hover:before {
  transition: all 400ms ease 200ms;
  visibility: visible;
  opacity: 1;
}
.tooltip:hover:after {
  margin-top: 15px;
}
.tooltip:hover:before {
  margin-top: 5px;
}

.demo {
  width: 160px;
  text-align: center;
  padding: 10px 0;
  background: rgba(255,0,0,0.6);
  border-radius: 4px;
  position: absolute;
  left: 50%;
  margin-left: -80px;
  top: 50%;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 2px;
  text-decoration: none;
  font-family: Verdana;
  color: #000;
  box-shadow: 0px 2px 0px 1px rgba(0,0,0,0.1);
}
.demo2 {
  width: 160px;
  text-align: center;
  padding: 10px 0;
  background: rgba(255,255,40,0.6);
  border-radius: 4px;
  position: absolute;
  left: 50%;
  margin-left: -80px;
  top: 70%;
  text-transform: uppercase;
  font-size: 12px;
  letter-spacing: 2px;
  text-decoration: none;
  font-family: Verdana;
  color: #000;
  box-shadow: 0px 2px 0px 1px rgba(0,0,0,0.1);
}
.demo:before,
.demo:after {
  font-size: 14px;
  letter-spacing: 0;
  text-transform: none;
  font-family: Arial, helvetica, sans-serif;
}

	
	header{
		text-align: center;
		color: white;
		background-color: forestgreen;
position:relative;
		padding: 25px;
				margin:0;
					}
	
   </style> 
</head>
<body>
<header>

	<h1>STUDENT PORTAL</h1>
	<h2>STUDENT PAGE</h2>
	<h3 align="right"><?php
session_start();
echo "Welcome ".$_SESSION['user_id'];
?></h3>
	<a href="myprofile.php">My Profile</a>  |
	<a href="login.php">Log Out</a>
	
</header>
<div>
<a class="tooltip demo" href="applies.html" data-tooltip="Here, you can apply certificates.">Applies</a>
<a class="tooltip demo2" href="views.php" data-tooltip="You can see your applied application and their status.">View</a>
				</div>
</body>
</html>






