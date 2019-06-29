
<?php
if(isset($_POST['enter']))
{
$type=$_POST['type'];
}
if(isset($_POST['apply']))
{
    $pur=$_POST['pur'];
    session_start();
$user_id=$_SESSION['user_id'];

$type=$_POST['type'];
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
    $stat="Applied";
$sql="insert into document(doc_user_id,doc_type,status,purpose) values('$user_id','$type','$stat','$pur')";
$res=$conn->query($sql);
if(!$res)
{
    //echo "already applied";
    die("error in inserting".$conn->error);
}

}
?>

<html>
<head>
	<title></title>
	<style>
	body
	{
		padding: 0;
		margin:0;
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
	<h1>STUDENT PORTAL</h1>
	<h2>STUDENT PAGE</h2>
	<h3 align="right"><?php
session_start();
echo "Welcome ".$_SESSION['user_id'];
?></h3>
	<a href="student.php">Home</a>  |

	<a href="myprofile.php">My Profile</a>  |
	<a href="login.php">Log Out</a><br>
	
</header>
<form action="#" method="post"><br>
    <input type="text" name="type" value=<?=$type?> readonly>
    <input type="text" name="pur" placeholder="Enter your Purpose">
    
    <input type="submit" name="apply" value="apply">
</form>
</html>