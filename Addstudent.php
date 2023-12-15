<?php

$link = mysqli_connect("localhost", "root", "", "school");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['submit'])){
    $StudentID = $_POST['StudentID'];
    $StudentName = $_POST['StudentName'];
    $StudentAddress = $_POST['StudentAddress'];
    $StudentMedInfo = $_POST['StudentMedInfo'];

    //$StudentID = mysqli_real_escape_string($conn,)
    $sql=" INSERT INTO students (StudentID, StudentName,StudentAddress,StudentMedInfo) 
     VALUES('$StudentID', '$StudentName','$StudentAddress','$StudentMedInfo')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error adding record ";
      }
  
  //}
?>