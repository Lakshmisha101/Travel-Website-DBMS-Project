<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "book_db");

if(isset($_POST['update_data']))
{
    $id = $_POST['id'];

    $name = $_POST['dest'];


    $query = "UPDATE destination SET dest='$name'WHERE id='$id' ";

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['status']="Data Updated Sucessfully";
        header("location:edit1.php");

    }
    else
    {
        $_SESSION['status']="Data Not Updated";
        header("location:edit1.php");
    }

}
?>