<?php

include "database.php"; // Using database connection file here

$id = $_GET['Trigger_id']; // get id through query string

$del = mysqli_query($conn,"delete from logs where Trigger_id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:Trigger.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>