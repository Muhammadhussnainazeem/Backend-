<?php
$link = mysqli_connect("localhost", "root", "", "School");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['update'])){
    $TeacherID = $_POST['TeacherID'];
    $TeacherAnnualsalary = $_POST['TeacherAnnualsalary'];
    $TeacherEmail = $_POST['TeacherEmail'];

    $sql = "UPDATE teachers SET TeacherAnnualSalary= '$TeacherAnnualsalary', TeacherEmail= '$TeacherEmail'
    WHERE TeacherID= '$TeacherID'";
if($link->query($sql)=== TRUE){
    echo"Record Updated Successfully";
} else{
    echo"Error in Updating Records:". $link->error;
}
$link-> close();

?>