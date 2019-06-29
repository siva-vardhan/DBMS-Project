<?php
if(isset($_POST['enter']))
{
$user_id_in=$_POST['type'];
session_start();
$user_id=$_SESSION['user_id'];
//$r1_doctype=$_SESSION['staff_div'];
 echo $user_id_in;
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
    $stat="Processing";
    $sql="select * from staff_doc where sd_status='$stat' and sd_doc_user_id='$user_id_in' and sd_st_user_id='$user_id' limit 1";
    

//$sl="insert into document values('B160333CS','CGPA Conversion','Applied','sch','NULL')";
$res=$conn->query($sql);
$s1="select staff_div from staff where st_user_id='$user_id'";
$res=$conn->query($s1);
$row=$res->fetch_assoc();

   $r1=$row["staff_div"];
    //$r2=$row["doc_type"];
    //$Pr="Completed";
      //  echo $r1 . $r2 . $Pr;

    //$ql="insert into staff_doc values('$r1','$r2','$user_id','$Pr')";
    //$r=$conn->query($ql);
        //$ql="insert into staff_doc values('b160333cs','Fee_Structure','b160335cs','Processing')";
    $Pr="Completed";
    $q2="update document set status='$Pr' where doc_user_id='$user_id_in' and doc_type='$r1'";
    $r=$conn->query($q2);
    $q1="delete from staff_doc where sd_doc_user_id='$user_id_in' and sd_st_user_id='$user_id'";
    $r=$conn->query($q1);
    echo "success";
    header('Location: /project/staff.php');
    $conn->close();
    
}

?>

