<?php

include "database.php"; // Using database connection file here

$id = $_GET['dest']; // get id through query string

$del = mysqli_query($conn,"delete from destination where dest = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:dest.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>