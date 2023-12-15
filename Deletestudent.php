<?php
$link =mysqli_connect("localhost","root","","school");

//check connection
if($link === false){
    die("connection failed:");
}
//if(isset($_POST['Del'])){
    $StudentID =$_POST['StudentID'];

    $sql="DELETE from students WHERE StudentID='$StudentID'";
if($link->query($sql)===TRUE){
    echo"Record Deleted Successfully";
}  else{
    echo"Error in deletion of the records:".$link->error;
}
$link->close();
//}
?>
