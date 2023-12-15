<?php
$link =mysqli_connect("localhost","root","","school");

//check connection
if($link===false){
    die("connection failed:");
}
//if(isset($_POST['Del'])){
    $ParentsID =$_POST['ParentsID'];

    $sql="DELETE from parents WHERE ParentsID='$ParentsID'";
if($link->query($sql)===TRUE){
    echo"Record Deleted Successfully";
}  else{
    echo"Error in deletion of the records:".$link->error;
}
$link->close();
//}
?>