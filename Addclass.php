<?php

$link = mysqli_connect("localhost", "root", "", "school");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['submit'])){
    $ClassID = $_POST['ClassID'];
    $ClassCapacity = $_POST['ClassCapacity'];
    $ClassName = $_POST['ClassName'];
    $ClassYear = $_POST['ClassYear'];

    $sql=" INSERT INTO class(ClassID, ClassCapacity,ClassName,ClassYear)
    VALUES('$ClassID', '$ClassCapacity','$ClassName', '$ClassYear')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error adding record ";
      }
  
  //}
?>