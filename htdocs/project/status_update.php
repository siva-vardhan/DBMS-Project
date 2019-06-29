<?php
if(isset($_POST['enter']))
{
$user_id=$_POST['type'];


 echo $user_id;

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
    $sql="select * from document where status='$stat' limit 1";
    

//$sl="insert into document values('B160333CS','CGPA Conversion','Applied','sch','NULL')";
$res=$conn->query($sql);
$row=$res->fetch_assoc();

    $r1=$row["doc_user_id"];
    $r2=$row["doc_type"];
    $Pr="Processing";
        echo $r1 . $r2 . $Pr;

    $ql="insert into staff_doc values('$r1','$r2','$user_id','$Pr')";
    $r=$conn->query($ql);
        //$ql="insert into staff_doc values('b160333cs','Fee_Structure','b160335cs','Processing')";

    $q2="update document set status='$Pr' where doc_user_id='$r1' and doc_type='$r2'";
    $r=$conn->query($q2);
    echo "success";
    header('Location: /project/staff_work.php');
    $conn->close();
    
}

?>

