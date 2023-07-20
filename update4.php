<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "book_db");

if(isset($_POST['update_data']))
{
    $id = $_POST['id'];

    $name = $_POST['types'];

    $seats = $_POST['seats'];


    $query = "UPDATE tour SET types='$name',seats='$seats' WHERE id='$id' ";

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['status']="Data Updated Sucessfully";
        header("location:edit4.php");

    }
    else
    {
        $_SESSION['status']="Data Not Updated";
        header("location:edit4.php");
    }

}
?>