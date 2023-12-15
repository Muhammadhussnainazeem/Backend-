<?php
$link = mysqli_connect("localhost", "root", "", "School");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['update'])){
    $ClassID = $_POST['ClassID'];
    $ClassCapacity = $_POST['ClassCapacity'];
    $ClassName = $_POST['ClassName'];
    $ClassYear = $_POST['ClassYear'];

    $sql = "UPDATE class SET ClassID= '$ClassID', ClassCapacity= '$ClassCapacity', ClassName= '$ClassName', ClassYear= '$ClassYear'
    WHERE ClassID= '$ClassID'";
if($link->query($sql)=== TRUE){
    echo"Record Updated Successfully";
} else{
    echo"Error in Updating Records:". $link->error;
}
$link-> close();
//}
?>