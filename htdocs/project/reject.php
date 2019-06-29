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
$count=0;

if($res->num_rows==0){
    echo "no applied documents";
}

else{
    while($row=$res->fetch_assoc()){
        echo "<br/>";
        if($count==0)
        {
            $user=$row["doc_user_id"];
            $type=$row["doc_type"] ;
            $Pr="Rejected";
           // $q1 = "DELETE FROM document WHERE doc_user_id='$user' and doc_type='$type'";
            $q1="update document set status='$Pr' where doc_user_id='$user' and doc_type='$type'";
            $r1=$conn->query($q1);
           /*if ( === TRUE) {
                echo "Record deleted successfully";
           }*/
        }
        else
        {
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
            $count=1;
		}
        $r=$row["doc_type"];
        $sql="select st_user_id from staff where staff_div='$r'";
        $res2=$conn->query($sql);
        
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}



    
}}
header('Location: /project/admin.php');
$conn->close();
?>
