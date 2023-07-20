<?php

include "database.php"; // Using database connection file here

$id = $_GET['hotel']; // get id through query string

$del = mysqli_query($conn,"delete from packages where hotel = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:pack.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>