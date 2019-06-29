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
    <a href="admin.php">HOME</a>  |
    <a href="login.php">Log Out</a>
	
</header>
<br>
<form action="status_update.php" method="post">
        <input type="text" name="type"placeholder="enter staff user id of 1st doc" >
		<input type="submit" name="enter" value="submit">

<button type="submit" formaction="reject.php">Reject</button>
        </form>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$database="acad_section";
$conn=new mysqli ($servername,$username,$password,$database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
//echo "connected successfully";
$app="Applied";
$sql="select *from document where status='$app'";
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
		$type= $row["doc_type"];
		if($type=="Dup_ID"){
		echo "Name of bank:" .$row["purpose"];
		echo "<br/>";

		echo "Reference No." .$row["reference_no"];
		echo "<br/>";

		}
        $r=$row["doc_type"];
        $sql="select st_user_id from staff where staff_div='$r'";
        $res2=$conn->query($sql);
        
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}



    
}}
$conn->close();
?>
