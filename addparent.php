<?php

$link = mysqli_connect("localhost", "root", "", "school");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['submit'])){
    $ParentsID = $_POST['ParentsID'];
    $ParentsName = $_POST['ParentsName'];
    $ParentsAddress = $_POST['ParentsAddress'];
    $ParentsEmail = $_POST['ParentsEmail'];
    $ParentsTel = $_POST['ParentsTel'];

    $sql=" INSERT INTO parents(ParentsID, ParentsName,ParentsAddress,ParentsEmail,ParentsTel)
    VALUES('$ParentsID', '$ParentsName','$ParentsAddress', '$ParentsEmail','$ParentsTel')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error adding record ";
      }
  
  //}
?>