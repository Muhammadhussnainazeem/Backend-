<?php

$link = mysqli_connect("localhost", "root", "", "School");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['submit'])){
    $TeacherID = $_POST['TeacherID'];
    $TeacherPhonenumber = $_POST['TeacherPhonenumber'];
    $TeacherAnnualsalary = $_POST['TeacherAnnualsalary'];
    $TeacherEmail = $_POST['TeacherEmail'];

    $sql=" INSERT INTO teachers(TeacherID, TeacherPhonenumber,TeacherAnnualsalary,TeacherEmail)
    VALUES('$TeacherID', '$TeacherPhonenumber','$TeacherAnnualsalary', '$TeacherEmail')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error adding record ";
      }
  
  //}
?>