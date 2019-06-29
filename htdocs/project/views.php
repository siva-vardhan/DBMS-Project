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
                    <h3 align="right"><?php
		session_start();
		echo "Welcome ".$_SESSION['user_id'];
		?></h3>
                    <a href="student.php">Home</a>  | 
                    <a href="login.php">Log Out</a>
                    

             </header>
            
    </body>
    <br>
    <form>
    <button type="submit" formaction="reject1.php">Delete(if status is rejected)</button>
    </form>
</html>
<?php 
//session_start();
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
    
$sql="select * from document where doc_user_id='$user_id'";
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
    echo "<br/>";
    echo "doc_user_id:  " . $row["doc_user_id"] ;
    echo "<br/>";
    echo "Doc_Name:  " . $row["doc_type"] ;
    echo "<br/>";
    echo "Status:  " . $row["status"] ;
    echo "<br/>";
    
}
$conn->close();
?>