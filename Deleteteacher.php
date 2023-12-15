<?php
$link = mysqli_connect("localhost", "root", "", "school");

// Check connection
if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if 'Teacherid' is set in the $_POST array
if (isset($_POST['Teacherid'])) {
    $ID = $_POST['Teacherid'];

    $sql = "DELETE FROM teachers WHERE TeacherID='$ID'";
    if ($link->query($sql) === TRUE) {
        echo "Record Deleted Successfully";
    } else {
        echo "Error in deletion of the records: " . $link->error;
    }
} else {
    echo "Error: 'Teacherid' not set in the POST array.";
}

$link->close();
?>
