<?php
session_start();
$user_id=$_SESSION['user_id'];
$servername="localhost";
$username="root";
$password="";
$database="acad_section";
$conn=new mysqli ($servername,$username,$password,$database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
//echo "connected successfully";
$R="Rejected";
$sql="delete from document where status='$R' and doc_user_id='$user_id'";
$res=$conn->query($sql);
if($res->num_rows==0){
    echo "error";
}
header('Location: /project/views.php');
$conn->close();
?>
