<?php
$link = mysqli_connect("localhost", "root", "", "School");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
///if(isset($_POST['update'])){
    $StudentID = $_POST['StudentID'];
    $StudentName = $_POST['StudentName'];
    $StudentAddress = $_POST['StudentAddress'];
    $StudentMedInfo = $_POST['StudentMedInfo'];

    $sql = "UPDATE students SET StudentName= '$StudentName', StudentAddress= '$StudentAddress',StudentMedInfo= '$StudentMedInfo'
    WHERE StudentID= '$StudentID'";
if($link->query($sql)=== TRUE){
    echo"Record Updated Successfully";
} else{
    echo"Error in Updating Records:". $link->error;
}
$link->close();
//}
?>

