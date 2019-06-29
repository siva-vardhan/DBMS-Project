<html>
    <head>
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
                        font-size: 50px;
                    }
                    </style>

    </head>
    <body>
            <header>
                    <h1>ADMIN PORTAL</h1>
                    <h2>ADMIN PAGE</h2>
                    <a href="admin.php">Home</a>  | 
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
    
$sql="select * from staff";
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
    echo "<br/>";
    echo $row["st_user_id"] ;
    echo "<br/>";
    echo  $row["staff_div"] ;
    echo "<br/>";
    $a1=$row["st_user_id"];
    $ql="select * from staff_doc where sd_st_user_id='$a1'";
    $r1=$conn->query($ql);
    echo "No. of documents present working on:".$r1->num_rows;
    echo "<br/>";
    
}
$conn->close();
?>