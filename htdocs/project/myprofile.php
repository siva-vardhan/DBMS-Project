<html>
    <head>
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
                        font-size: 50px;
                    }
                    </style>

    </head>
    <body>
            <header>
                    <h1>STUDENT PORTAL</h1>
                    <h2>STUDENT PAGE</h2>
                    <a href="student.php">Home</a>  | 
                    <a href="login.php">Log Out</a>
             </header>
            
    </body>
</html>
<?php 
session_start();
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
    
$sql="select * from user where user_id='$user_id'";
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
    echo "<br/>";
    echo "user_id:  " . $row["user_id"] ;
    echo "<br/>";
    echo "Name:  " . $row["name"] ;
    echo "<br/>";
    echo "type:  " . $row["user_type"] ;
}
$ql="select * from student where s_user_id='$user_id'";
$res=$conn->query($ql);
while($row=$res->fetch_assoc()){
    
    echo "<br/>";
    echo "programme:  " . $row["programme"] ;
    echo "<br/>";
    echo "year:  " . $row["year"] ;
    echo "<br/>";
    echo "Email_ID:  " . $row["email"] ;
}
$conn->close();
?>