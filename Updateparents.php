<?php
$link = mysqli_connect("localhost", "root", "", "School");

// Check connection
if ($link === false) {
    die("Connection failed: ");
}
//if(isset($_POST['update'])){
    $ParentsID = $_POST['ParentsID'];
    $ParentsName = $_POST['ParentsName'];
    $ParentsAddress = $_POST['ParentsAddress'];
    $ParentsEmail = $_POST['ParentsEmail'];
    $ParentsTel = $_POST['ParentsTel'];

    $sql = "UPDATE parents SET ParentsName= '$ParentsName', ParentsAddress= '$ParentsAddress',ParentsEmail= '$ParentsEmail',ParentsTel= '$ParentsTel'
    WHERE ParentsID= $ParentsID";
if($link->query($sql)=== TRUE){
    echo"Record Updated Successfully";
} else{
    echo"Error in Updating Records:". $link->error;
}
$link-> close();

?>