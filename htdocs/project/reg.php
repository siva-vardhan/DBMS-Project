<?php
	$name=$_POST['name'];
	$user_id=$_POST['user_id'];
	$email=$_POST['Email-id'];
    $password=$_POST['Password'];
    $type=$_POST['user_type'];
    $pgm=$_POST['pgm'];
    $year=$_POST['yr'];
    $div=$_POST['staff_div'];
    $ad_id="b160340cs";
	$servername="localhost";
	$username="root";
	$pass="";
	$database="acad_section";

    $conn=new mysqli($servername,$username,$pass,$database);
    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }
    echo "connected successfully";
    
    $q1="insert into user values('$user_id','$password','$name','$type')";
    if($conn->query($q1)){
        echo "form has been successfully submitted";
    }
    else{
        echo "Failed to submit";
    }
    if($type =="student"){
        $q2="insert into student values('$user_id','$pgm','$year','$email','$ad_id')";
		if($conn->query($q2)){
			echo "form has been successfully submitted";
		}
		else{
            die("connection failed:".$conn->error);
        }
        
    }
	if($type =="admin"){
        $q2="insert into admin values('$user_id','$email')";
		if($conn->query($q2)){
			echo "form has been successfully submitted";
		}
		else{
            die("connection failed:".$conn->error);
        }
        
    }
    if($type =="staff"){
        $q2="insert into staff values('$user_id','$div','$ad_id')";
		if($conn->query($q2)){
			echo "form has been successfully submitted";
		}
		else{
            die("connection failed:".$conn->error);
        }
        
    }
    header('Location: /project/login.php');
	$conn->close();
?>