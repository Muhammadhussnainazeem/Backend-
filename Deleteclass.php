<?php
$link =mysqli_connect("localhost","root","","school");

//check connection
if($link===false){
    die("connection failed:");
}
//if(isset($_POST['Del'])){
    $ClassID =$_POST['ClassID'];

    $sql="DELETE from class WHERE ClassID='$ClassID'";
if($link->query($sql)===TRUE){
    echo"Record Deleted Successfully";
}  else{
    echo"Error in deletion of the records:".$link->error;
}
$link->close();
//}
?>
