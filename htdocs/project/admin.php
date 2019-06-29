

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body
	{
		padding: 0;
		margin:0;
		background-color: lightgreen;
	}

	header{
		text-align: center;
		background-color: forestgreen;
		color: white;
		padding: 25px;
				margin:0;

	}
	div{
		text-align: center;
		padding: 100px;
		font-size: 60px;
	}
   </style> 
</head>
<header>
	<h1>ADMIN PORTAL</h1>
	<h2>ADMIN PAGE</h2>
	<h3 align="right"><?php
session_start();
echo "Welcome ".$_SESSION['user_id'];
?></h3>
	<!--<a href="myprofile.php">My Profile</a>-->
	<a href="login.php">Log Out</a>
	
</header>
<body>
    <form>
    	<div>
        <a href="document1.php">Applied_Document</a><br>
        <a href="document2.php">Processing_Document</a><br>
		<a href="document3.php">Completed_Document</a><br>
		<a href="staff_work.php">Staff</a><br>
    	<!--<a href="views.php">Views</a>-->
    	</div>
    </form>
    
</body>
</html>



<?php
/*$servername="localhost";
$username="root";
$password="";
$database="acad_section";
$conn=new mysqli ($servername,$username,$password,$database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
//echo "connected successfully";
$sql="select *from document";
$res=$conn->query($sql);
if($res->num_rows==0){
    echo "no applied documents";
}
else{
    while($row=$res->fetch_assoc()){
        echo "<br/>";
        echo "doc_user_id:  " . $row["doc_user_id"] ;
        echo "<br/>";
        echo "Doc_Name:  " . $row["doc_type"] ;
        echo "<br/>";
        echo "Status:  " . $row["status"] ;
        echo "<br/>";
        
    }
}
$conn->close();*/
?>