<html>
<head>
<title>Academic Section</title>
    <style>
        * {
box-sizing: border-box;
}

*:focus {
	outline: none;
}
body {
font-family: Arial;
background-color: #3498DB;
padding: 50px;
}
.login {
margin: 20px auto;
width: 300px;
}
.login-screen {
background-color: #FFF;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #777;
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #3498DB;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #2980B9;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
	margin-top: 12px;
}
    </style>

</head>
   <body>
  
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
            <form action="#" method="post">

			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" name="user_name" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" name="pwd"  placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

                <div class="control-group">
				<input type="text" list="type" class="login-field" name="user_type"  placeholder="user_type" id="login-name">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
                <datalist id="type">
                <option value="student">
                <option value="admin">
                <option value="staff">
                </datalist>
				</div>
               
				<input class="btn btn-primary btn-large btn-block" type="submit" value="Login" >
				<a class="login-link" href="reg.html">Sign Up</a>
			</div>
            </form>
		</div>
	</div>
   </body>
</html>

<?php
session_start();
if(!$_SESSION['user_id'])
{
    //Do not show protected data, redirect to login...
    header('Location: login.php');
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id=$_POST['user_name'];
    $pwd=$_POST['pwd'];
    $type=$_POST['user_type'];
    $servername="localhost";
    $username="root";
    $password="";
    $database="acad_section";
    $conn=new mysqli ($servername,$username,$password,$database);

    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }
    echo "connected successfully";
    

$sql="select * from user where user_id='$id' and password='$pwd' and user_type='$type'";
$res=$conn->query($sql);
if($res->num_rows==0)
echo "user does not exist";
else{
echo "user exists";
$_SESSION['user_id']=$id;
echo $_SESSION['user_id'];

if($type=="admin"){
    echo "admin";
    header('Location: /project/admin.php');
}
else if($type=="staff"){
    echo "staff";
    header('Location: /project/staff.php');
}
else if($type=="student"){
    echo "student";
    header('Location: /project/student.php');

}
    $conn->close();
}
}
?>



