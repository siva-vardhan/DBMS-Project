

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
	<h1>STAFF PORTAL</h1>
	<h2>STAFF PAGE</h2>
	<h3 align="right"><?php
session_start();
echo "Welcome ".$_SESSION['user_id'];
?></h3>
	<a href="myprofile_s.php">My Profile</a>  |
	<a href="login.php">Log Out</a>
	
</header>
<br>
<form action="staff1.php" method="post">
        <input type="text" name="type"placeholder="enter student user id of doc finished" required>
        <input type="submit" name="enter" value="submit">
        </form>
</html>

<?php 
$user_id=$_SESSION['user_id'];


    //$id=$_POST['user_name'];
    //$pwd=$_POST['pwd'];
    //$type=$_POST['user_type'];
    $servername="localhost";
    $username="root";
    $password="";
    $database="acad_section";
    $conn=new mysqli ($servername,$username,$password,$database);

    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }
    //echo "connected successfully";
    
$sql="select * from staff_doc where sd_st_user_id='$user_id'";
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
    echo "<br/>";
    echo "doc_user_id:  " . $row["sd_doc_user_id"] ;
    echo "<br/>";
    echo "Doc_Name:  " . $row["sd_doc_type"] ;
    echo "<br/>";
    echo "Status:  " . $row["sd_status"] ;
    echo "<br/>";
    
}

$conn->close();
?>


